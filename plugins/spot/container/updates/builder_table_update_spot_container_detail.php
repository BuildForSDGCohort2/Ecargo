<?php namespace spot\Container\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSpotContainerDetail extends Migration
{
    public function up()
    {
        Schema::rename('spot_container_details', 'spot_container_detail');
    }
    
    public function down()
    {
        Schema::rename('spot_container_detail', 'spot_container_details');
    }
}
