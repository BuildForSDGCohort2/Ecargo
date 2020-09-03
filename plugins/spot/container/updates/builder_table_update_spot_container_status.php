<?php namespace spot\Container\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSpotContainerStatus extends Migration
{
    public function up()
    {
        Schema::rename('spot_container_statuses', 'spot_container_status');
        Schema::table('spot_container_status', function($table)
        {
            $table->text('description');
            $table->integer('equal');
        });
    }
    
    public function down()
    {
        Schema::rename('spot_container_status', 'spot_container_statuses');
        Schema::table('spot_container_statuses', function($table)
        {
            $table->dropColumn('description');
            $table->dropColumn('equal');
        });
    }
}
