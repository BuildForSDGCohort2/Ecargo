<?php namespace Spot\Shipment\Updates;

use October\Rain\Database\Updates\Seeder;
use RainLab\User\Models\User;
use Spot\Shipment\Models\Status;
use Spot\Shipment\Models\Office;
use Spot\Shipment\Models\DeliveryTime;
use Spot\Shipment\Models\Packaging;
use Spot\Shipment\Models\Treasury;
use Vdomah\Roles\Models\Role;
use RainLab\User\Models\UserGroup;
use Spot\UserPermissions\Models\Permission;

class SeedAllTables extends Seeder
{

    public function run()
    {
        UserGroup::destroy([1, 2]);

        \Db::table('system_settings')->insert([
            [
                'item' => 'user_settings',
                'value' => '{"require_activation":"1","activate_mode":"auto","use_throttle":"1","block_persistence":"0","allow_registration":"1","login_attribute":"username","remember_login":"ask","min_password_length":"6"}'
            ],
        ]);
        if(!Treasury::find(1)){
            Treasury::create([
                'name'      => 'Main',
                'default'   => 1,
            ]);
        }
        if(!Status::find(1)){
            Status::create([
                'name'      => 'Pending',
                'equal'     => '1',
                'color'     => 'warning',
            ]);
        }
        if(!Office::find(1)){
            Office::create([
                'name'      => 'Main Branch',
            ]);
        }
        if(!DeliveryTime::find(1)){
            DeliveryTime::create([
                'name'      => '1-2 Days',
                'count'     => '48',
            ]);
        }
        if(!Packaging::find(1)){
            Packaging::create([
                'name'      => 'Default Package',
            ]);
        }

        if(!Role::find(1)){
            Role::create([
                'name'      => 'Administration',
                'code'      => 'administration',
            ]);
            Role::create([
                'name'      => 'Supervisor',
                'parent_id' => 1,
                'code'      => 'supervisor',
            ]);
            Role::create([
                'name'      => 'Department Manager',
                'parent_id' => 2,
                'code'      => 'department-manager',
            ]);
            Role::create([
                'name'      => 'Employee',
                'parent_id' => 3,
                'code'      => 'employee',
            ]);
            Role::create([
                'name'      => 'Client',
                'code'      => 'client',
            ]);
            Role::create([
                'name'      => 'Branch Manager',
                'parent_id' => 1,
                'code'      => 'branch-manager',
            ]);
        }


        if(!Permission::find(1)){
            Permission::create([
                'code'                      => 'order',
                'name'                      => 'Workorder',
                'type'                      => 'crud',
                'description'               => 'Ability to manage the work orders',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'setting',
                'name'                      => 'Setting',
                'type'                      => 'crud',
                'description'               => 'Ability to manage system configuration',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'languages',
                'name'                      => 'Languages',
                'type'                      => 'crud',
                'description'               => 'Ability to manage lanaguages',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'departments',
                'name'                      => 'Departments',
                'type'                      => 'crud',
                'description'               => 'Ability to manage departments/groups',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'employees',
                'name'                      => 'Employees',
                'type'                      => 'crud',
                'description'               => 'Ability to manage employees',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'backups',
                'name'                      => 'Backups',
                'type'                      => 'crud',
                'description'               => 'Ability to manage backups',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'manifest',
                'name'                      => 'Manifest',
                'type'                      => 'crud',
                'description'               => 'Ability to manage manifest',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'assign',
                'name'                      => 'Assign',
                'type'                      => 'crud',
                'description'               => 'Ability to assign employees and drivers to orders',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'client',
                'name'                      => 'Client',
                'type'                      => 'crud',
                'description'               => 'Ability to manage clients',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'statuses',
                'name'                      => 'Statuses',
                'type'                      => 'crud',
                'description'               => 'Ability to manage statuses',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'areas',
                'name'                      => 'Areas',
                'type'                      => 'crud',
                'description'               => 'Ability to manage areas',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'fees',
                'name'                      => 'Fees',
                'type'                      => 'crud',
                'description'               => 'Ability to manage fees',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'currencies',
                'name'                      => 'Currencies',
                'type'                      => 'crud',
                'description'               => 'Ability to manage currencies',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'packaging',
                'name'                      => 'Packaging',
                'type'                      => 'crud',
                'description'               => 'Ability to manage packaging',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'countries',
                'name'                      => 'Countries',
                'type'                      => 'crud',
                'description'               => 'Ability to manage countries',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'states',
                'name'                      => 'States',
                'type'                      => 'crud',
                'description'               => 'Ability to manage states',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'cities',
                'name'                      => 'Cities',
                'type'                      => 'crud',
                'description'               => 'Ability to manage cities',
                'updated_at'              => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'branches',
                'name'                      => 'Branches',
                'type'                      => 'crud',
                'description'               => 'Ability to manage branches',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'cars',
                'name'                      => 'Cars',
                'type'                      => 'crud',
                'description'               => 'Ability to manage cars',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'transaction',
                'name'                      => 'Transactions',
                'type'                      => 'crud',
                'description'               => 'Ability to manage transactions',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'report',
                'name'                      => 'Reports',
                'type'                      => 'crud',
                'description'               => 'Ability to manage reports',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'message',
                'name'                      => 'Messages',
                'type'                      => 'crud',
                'description'               => 'Ability to manage client messages',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'category',
                'name'                      => 'Category',
                'type'                      => 'crud',
                'description'               => 'Ability to manage products categories',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'couriers',
                'name'                      => 'Couriers',
                'type'                      => 'crud',
                'description'               => 'Ability to manage couriers',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'shipping',
                'name'                      => 'Shipping',
                'type'                      => 'crud',
                'description'               => 'Ability to manage shipping modes',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'treasury',
                'name'                      => 'Treasury',
                'type'                      => 'crud',
                'description'               => 'Ability to manage treasury',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
            Permission::create([
                'code'                      => 'deliverytimes',
                'name'                      => 'Delivery Times',
                'type'                      => 'crud',
                'description'               => 'Ability to manage delivery times',
                'updated_at'                => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
            ]);
        }

        if(!User::find(1)){
            User::create([
                'name'                      => 'Cargo Admin',
                'email'                     => 'support@cargopro.com',
                'password'                  => '123456',
                'password_confirmation'     => '123456',
                'is_activated'              => 1,
                'activated_at'              => date('Y-m-d h:i:s'),
                'created_at'                => date('Y-m-d h:i:s'),
                'updated_at'                => date('Y-m-d h:i:s'),
                'username'                  => 'admin',
                'surname'                   => 'Courier Administration',
                'role_id'                   => 1,
            ]);
        }
    }

}
