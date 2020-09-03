<?php namespace Spot\Shipment\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class ExtendUser extends Migration {

	public function up()
    {
		Schema::table('users', function($table) {
			$table->string('email')->nullable()->change();
			$table->string('password')->nullable()->change();
	        if (!Schema::hasColumn('users', 'city_id')) {
				$table->integer('city_id')->nullable();
			}
	        if (!Schema::hasColumn('users', 'area_id')) {
				$table->integer('area_id')->nullable();
			}
			if (!Schema::hasColumn('users', 'manager')) {
				$table->text('manager')->nullable();
			}
			if (!Schema::hasColumn('users', 'places')) {
				$table->text('places')->nullable();
			}
			if (!Schema::hasColumn('users', 'gender')) {
				$table->string('gender')->nullable();
			}
			if (!Schema::hasColumn('users', 'driver')) {
				$table->string('driver')->nullable();
			}
			if (!Schema::hasColumn('users', 'office')) {
				$table->string('office')->nullable();
			}
			if (!Schema::hasColumn('users', 'language')) {
				$table->string('language')->nullable();
			}
        });
	}

	public function down()
    {
		if (Schema::hasColumn('users', 'manager')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('manager');
            });
        }
		if (Schema::hasColumn('users', 'city_id')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('city_id');
            });
        }
		if (Schema::hasColumn('users', 'area_id')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('area_id');
            });
        }
		if (Schema::hasColumn('users', 'gender')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('gender');
            });
        }
		if (Schema::hasColumn('users', 'places')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('places');
            });
        }
		if (Schema::hasColumn('users', 'driver')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('driver');
            });
        }
		if (Schema::hasColumn('users', 'office')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('office');
            });
        }
		if (Schema::hasColumn('users', 'language')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('language');
            });
        }

	}
}
