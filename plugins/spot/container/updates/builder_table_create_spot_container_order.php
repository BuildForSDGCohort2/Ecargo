<?php namespace spot\Container\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotContainerOrder extends Migration
{
    public function up()
    {
        Schema::create('spot_container_order', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('customer_id');
            $table->string('number', 50);
            $table->string('bol', 50);
            $table->integer('location_type')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->string('destination', 100);
            $table->string('reason_for_arrive', 100);
            $table->string('t1', 100);
            $table->integer('status');
            $table->integer('cc');
            $table->dateTime('eta_port');
            $table->dateTime('eta_lgg');
            $table->dateTime('inspected_date');
            $table->dateTime('loading_date');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('spot_container_order');
    }
}
