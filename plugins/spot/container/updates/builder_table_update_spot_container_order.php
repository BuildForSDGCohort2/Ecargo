<?php namespace spot\Container\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSpotContainerOrder extends Migration
{
    public function up()
    {
        Schema::table('spot_container_order', function($table)
        {
            $table->integer('inspected_port');
            $table->integer('reason_for_arrive')->nullable(false)->unsigned(false)->default(null)->change();
            $table->dropColumn('inspected_date');
        });
    }
    
    public function down()
    {
        Schema::table('spot_container_order', function($table)
        {
            $table->dropColumn('inspected_port');
            $table->string('reason_for_arrive', 100)->nullable(false)->unsigned(false)->default(null)->change();
            $table->dateTime('inspected_date');
        });
    }
}
