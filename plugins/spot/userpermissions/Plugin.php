<?php namespace Spot\UserPermissions;

use Exception;
use Event;
use Backend;
use Spot\UserPermissions\Models\Permission as PermissionModel;
use Rainlab\User\Models\User as UserModel;
use Rainlab\User\Models\UserGroup as UserGroupModel;
use October\Rain\Exception\ApplicationException;
use Illuminate\Support\Facades\DB as Db;
use BackendAuth;

class Plugin extends \System\Classes\PluginBase
{
    /**
     * @var array Plugin dependencies
     */
    public $require = ['RainLab.User'];

    public function pluginDetails()
    {
        return [
            'name' => 'spot.userpermissions::lang.plugin.name',
            'description' => 'spot.userpermissions::lang.plugin.description',
            'author' => 'JoakimBo',
            'icon' => 'icon-unlock-alt'
        ];
    }

    public function boot()
    {
        $this->registerPermissions();
        $this->extendRainlabUserSideMenu();
        $this->extendUserModel();
        $this->extendUserGroupModel();
        $this->extendUserController();
        $this->extendUserGroupController();
    }

    public function registerPermissions()
    {
        return [
            'spot.userpermissions.access_permissions' => [
                'tab'   => 'spot.userpermissions::lang.plugin.tab',
                'label' => 'spot.userpermissions::lang.plugin.access_permissions'
            ],
            'spot.userpermissions.access_user_permissions' => [
                'tab'   => 'spot.userpermissions::lang.plugin.tab',
                'label' => 'spot.userpermissions::lang.plugin.access_user_permissions'
            ],
            'spot.userpermissions.access_group_permissions' => [
                'tab'   => 'spot.userpermissions::lang.plugin.tab',
                'label' => 'spot.userpermissions::lang.plugin.access_group_permissions'
            ],
        ];
    }

    protected function extendRainlabUserSideMenu()
    {
        Event::listen('backend.menu.extendItems', function($manager) {
            $manager->addSideMenuItems('RainLab.User', 'user', [
                'permissions' => [
                    'label' => 'spot.userpermissions::lang.permissions.menu_label',
                    'icon' => 'icon-unlock-alt',
                    'permissions' => ['spot.userpermissions.access_permissions'],
                    'url' => Backend::url('spot/userpermissions/permissions'),
                ]
            ]);
        });
    }

    protected function extendUserModel()
    {
        function getAllowedPermissions($model) {
            if (!$model->is_activated) {
                return [];
            }
            $groupPermissionsQuery = $model->user_permissions()->where('spot_userpermissions_user_permission.permission_state', '!=', null)
            ->join('users_groups', 'spot_userpermissions_user_permission.user_id', '=', 'users_groups.user_id')
            ->join('spot_userpermissions_group_permission', function ($join) {
                $join->on('users_groups.user_group_id', '=', 'spot_userpermissions_group_permission.group_id')
                ->on(
                    'spot_userpermissions_group_permission.permission_id',
                    '=',
                    'spot_userpermissions_user_permission.permission_id'
                )
                ->where('spot_userpermissions_group_permission.permission_state', '!=', null);
            })
            ->join('spot_userpermissions_permissions as permissions',
                'spot_userpermissions_group_permission.permission_id',
                '=',
                'permissions.id'
            )->select(
                'permissions.id',
                'permissions.code',
                'spot_userpermissions_user_permission.user_id',
                'spot_userpermissions_user_permission.permission_id',
                'spot_userpermissions_user_permission.permission_state',
                'spot_userpermissions_user_permission.created_at',
                'spot_userpermissions_user_permission.updated_at'
            );
            $permissionsQueryResult = $model->user_permissions()->select('id', 'code')->where('permission_state', '!=', null)->union($groupPermissionsQuery)->get();
            if (!$permissionsQueryResult) {
                $permissionsQueryResult = [];
            } else {
                $permissionsQueryResult = $permissionsQueryResult->toArray();
            }
            return $permissionsQueryResult;
        }

        function hasUserPermission($permissionInput, $column, $type, $allowedPermissions) {
            if (is_array($allowedPermissions) && count($allowedPermissions) > 0) {
                foreach ($allowedPermissions as $permission) {
                    if ($permission[$column] == $permissionInput && strpos($permission['pivot']['permission_state'],$type) !== false) {
                        return true;
                    }
                }
            }
            return false;
        }

        function normalizePermissionInput($permissions) {
            if (!is_array($permissions)) {
                $permissions = [$permissions];
            }
            $permissions = array_filter($permissions, function ($element) {
                if (is_string($element) || is_int($element)) {
                    return true;
                }
                return false;
            });
            return $permissions;
        }

        UserModel::extend(function($model)
        {
            $model->belongsToMany['user_permissions'] = [
                'Spot\UserPermissions\Models\Permission',
                'table' => 'spot_userpermissions_user_permission',
                'key' => 'user_id',
                'otherKey' => 'permission_id',
                'timestamps' => true,
                'pivot' => ['permission_state'],
            ];
            $model->bindEvent('model.afterCreate', function() use ($model) {
                $permissions = PermissionModel::all();
                if ($permissions) {
                    foreach($permissions as $permission) {
                        if($model->role_id == 1){
                            $model->user_permissions()->attach($permission->id, ['permission_state' => 'crud']);
                        }elseif($model->id == 1){
                            $model->user_permissions()->attach($permission->id, ['permission_state' => 'crud']);
                        }else{
                            $model->user_permissions()->attach($permission->id, ['permission_state' => 'NULL']);
                        }
                    }
                }

                if($model->role_id == 5){
                    $model->user_permissions()->detach([1,11,22]);
                    $model->user_permissions()->attach(1, ['permission_state' => 'crd']);
                    $model->user_permissions()->attach(11, ['permission_state' => 'c']);
                    $model->user_permissions()->attach(22, ['permission_state' => 'r']);
                }
            });
            $model->addDynamicMethod('hasUserPermission', function($permissionsInput, $type, $match = 'all') use ($model) {
                if (!is_string($match) || $match != 'all' && $match != 'one') {
                    throw new ApplicationException('second parameter of hasUserPermission() must be of type string with a value of "all" or "one"!');
                }
                $permissionsInput = normalizePermissionInput($permissionsInput);
                if (is_array($permissionsInput) && count($permissionsInput) > 0) {
                    $result = [];
                    $allowedPermissions = getAllowedPermissions($model);
                    foreach ($permissionsInput as $permissionInput) {
                        if (is_string($permissionInput)) {
                            $result[] = hasUserPermission($permissionInput, 'code', $type, $allowedPermissions);
                        } elseif (is_int($permissionInput)) {
                            $result[] = hasUserPermission($permissionInput, 'id', $type, $allowedPermissions);
                        }
                    }
                    if ($match == 'all') {
                        return !in_array(false, $result);
                    } elseif ($match == 'one') {
                        return in_array(true, $result);
                    }
                }
                return false;
            });
        });
    }

    protected function extendUserGroupModel()
    {
        UserGroupModel::extend(function($model) {
            $model->belongsToMany['user_permissions'] = ['Spot\UserPermissions\Models\Permission',
                'table' => 'spot_userpermissions_group_permission',
                'key' => 'group_id',
                'otherKey' => 'permission_id',
                'timestamps' => true,
                'pivot' => ['permission_state'],
            ];
            $model->bindEvent('model.afterCreate', function() use ($model) {
                $permissions = PermissionModel::all();
                if ($permissions) {
                    foreach($permissions as $permission) {
                        $model->user_permissions()->attach($permission->id);
                    }
                }
            });
        });
    }

    protected function extendUserController()
    {
        Event::listen('backend.form.extendFields', function($widget) {
            // Only for the User controller
            if (!$widget->getController() instanceof \RainLab\User\Controllers\Users) {
                return;
            }
            // Only for the User model
            if (!$widget->model instanceof \RainLab\User\Models\User) {
                return;
            }
            // only add field if backend user has access
            if (BackendAuth::getUser()->hasAccess('spot.userpermissions.access_user_permissions')) {
                $widget->addTabFields([
                    'user_permissions' => [
                        'tab' => 'Permissions',
                        'label'   => 'spot.userpermissions::lang.permissions.menu_label',
                        'type'    => 'userpermissioneditor',
                        'mode' => 'radio',
                        'context' => ['create','preview','update'],
                    ]
                ]);
            }
        });
    }

    protected function extendUserGroupController()
    {
        Event::listen('backend.form.extendFields', function($widget) {
            // Only for the UserGroup controller
            if (!$widget->getController() instanceof \RainLab\User\Controllers\UserGroups) {
                return;
            }
            // Only for the UserGroup model
            if (!$widget->model instanceof \RainLab\User\Models\UserGroup) {
                return;
            }
            // only add field if backend user has access
            if (BackendAuth::getUser()->hasAccess('spot.userpermissions.access_group_permissions')) {
                $widget->addTabFields([
                    'user_permissions' => [
                        'tab' => 'Permissions',
                        'label'   => 'spot.userpermissions::lang.permissions.menu_label',
                        'type'    => 'userpermissioneditor',
                        'mode' => 'checkbox',
                        'context' => ['create','preview','update'],
                    ]
                ]);
            }
        });
    }

    public function registerFormWidgets()
    {
        return [
            'Spot\UserPermissions\FormWidgets\UserPermissionEditor' => 'userpermissioneditor',
        ];
    }
}
