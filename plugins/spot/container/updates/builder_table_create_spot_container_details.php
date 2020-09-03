<?php namespace spot\Container\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotContainerDetails extends Migration
{
    public function up()
    {
        Schema::create('spot_container_details', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('license_palate', 100);
            $table->string('size', 50);
            $table->integer('weight');
            $table->integer('num_box');
            $table->integer('num_pallets');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('spot_container_details');
    }
}
