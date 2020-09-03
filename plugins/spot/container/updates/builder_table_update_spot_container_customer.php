<?php namespace spot\Container\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSpotContainerCustomer extends Migration
{
    public function up()
    {
        Schema::table('spot_container_customer', function($table)
        {
            $table->renameColumn('badget', 'budget');
        });
    }
    
    public function down()
    {
        Schema::table('spot_container_customer', function($table)
        {
            $table->renameColumn('budget', 'badget');
        });
    }
}
