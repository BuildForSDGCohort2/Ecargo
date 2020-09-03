<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentCar extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_car', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->smallInteger('enable')->default(1);
            $table->integer('driver_id')->nullable();
            $table->integer('responsible_id')->nullable();
            $table->text('description')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spot_shipment_car');
    }
}
