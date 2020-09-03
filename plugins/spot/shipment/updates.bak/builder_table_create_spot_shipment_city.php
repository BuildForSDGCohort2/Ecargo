<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentCity extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_city', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('state_id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('spot_shipment_city');
    }
}
