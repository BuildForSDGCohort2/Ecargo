<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentPackaging extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_packaging', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 250);
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('spot_shipment_packaging');
    }
}
