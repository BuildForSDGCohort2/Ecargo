<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentCourier extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_courier', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 250);
            $table->string('address', 250)->nullable();
            $table->string('phone', 20)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('spot_shipment_courier');
    }
}
