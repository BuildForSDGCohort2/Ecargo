<?php namespace spot\Container\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSpotContainerDetail2 extends Migration
{
    public function up()
    {
        Schema::table('spot_container_detail', function($table)
        {
            $table->integer('container_id');
        });
    }
    
    public function down()
    {
        Schema::table('spot_container_detail', function($table)
        {
            $table->dropColumn('container_id');
        });
    }
}
