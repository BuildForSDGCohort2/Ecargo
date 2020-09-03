<?php namespace spot\Container\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSpotContainerOrder2 extends Migration
{
    public function up()
    {
        Schema::table('spot_container_order', function($table)
        {
            $table->string('dp', 50);
        });
    }
    
    public function down()
    {
        Schema::table('spot_container_order', function($table)
        {
            $table->dropColumn('dp');
        });
    }
}
