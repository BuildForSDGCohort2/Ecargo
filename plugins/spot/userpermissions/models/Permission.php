<?php namespace Spot\UserPermissions\Models;

use Model;
use Rainlab\User\Models\User as UserModel;
use Rainlab\User\Models\UserGroup as UserGroupModel;

class Permission extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'spot_userpermissions_permissions';

    /*
     * Validation
     */
    public $rules = [
        'name' => 'required',
    ];

    public $belongsToMany = [
        'users' => ['Rainlab\User\Models\User',
            'table' => 'spot_userpermissions_user_permission',
            'key' => 'permission_id',
            'otherKey' => 'user_id',
            'timestamps' => true,
            'pivot' => ['permission_state'],
        ],
        'groups' => ['Rainlab\User\Models\UserGroup',
            'table' => 'spot_userpermissions_group_permission',
            'key' => 'permission_id',
            'otherKey' => 'group_id',
            'timestamps' => true,
        ],
    ];

    public function beforeSave()
    {
        $this->setCodeIfEmpty();
        $this->sluggifyCode();
    }

    protected function setCodeIfEmpty()
    {
        if (empty($this->code)) {
            $this->code = str_slug($this->name, '-');
        }
    }

    protected function sluggifyCode()
    {
        $this->code = str_slug($this->code, '-');
    }

    public function afterCreate()
    {
        $this->addNewPermissionToUsers();
    }

    protected function addNewPermissionToUsers()
    {
        $users = UserModel::all();
        if($users) {
            foreach($users as $user) {
                if($user->role_id == 1){
                    $user->user_permissions()->attach($this->id, ['permission_state' => 'crud']);
                }elseif($user->id == 1){
                    $user->user_permissions()->attach($this->id, ['permission_state' => 'crud']);
                }else{
                    $user->user_permissions()->attach($this->id, ['permission_state' => 'NULL']);
                }
            }
        }
    }
}
