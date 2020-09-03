<?php namespace spot\Container\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotContainerStatuses extends Migration
{
    public function up()
    {
        Schema::create('spot_container_statuses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 100);
            $table->string('color', 100);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('spot_container_statuses');
    }
}
