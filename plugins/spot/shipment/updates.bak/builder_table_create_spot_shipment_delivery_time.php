<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentDeliveryTime extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_delivery_time', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('count')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spot_shipment_delivery_time');
    }
}
