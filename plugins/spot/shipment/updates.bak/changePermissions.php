<?php namespace Spot\Shipment\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class ChangePermissions extends Migration {

	public function up()
    {
		Schema::table('spot_userpermissions_group_permission', function($table) {
			$table->string('permission_state', 4)->nullable()->change();
        });
		Schema::table('spot_userpermissions_user_permission', function($table) {
			$table->string('permission_state', 4)->nullable()->change();
        });
		if (!Schema::hasColumn('spot_userpermissions_permissions', 'type')) {
			Schema::table('spot_userpermissions_permissions', function($table) {
				$table->string('type', 4)->default('crud');
	        });
		}
	}

	public function down()
    {
		if (Schema::hasColumn('spot_userpermissions_permissions', 'type')) {
            Schema::table('spot_userpermissions_permissions', function($table)
            {
                $table->dropColumn('type');
            });
        }
	}
}
