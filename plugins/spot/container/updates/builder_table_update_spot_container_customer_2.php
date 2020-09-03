<?php namespace spot\Container\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSpotContainerCustomer2 extends Migration
{
    public function up()
    {
        Schema::table('spot_container_customer', function($table)
        {
            $table->renameColumn('cost_28', 'cost_48');
        });
    }
    
    public function down()
    {
        Schema::table('spot_container_customer', function($table)
        {
            $table->renameColumn('cost_48', 'cost_28');
        });
    }
}
