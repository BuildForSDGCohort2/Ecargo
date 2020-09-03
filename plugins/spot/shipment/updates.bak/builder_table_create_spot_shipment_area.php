<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentArea extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_area', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('city_id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('spot_shipment_area');
    }
}
