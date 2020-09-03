<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentStatus extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_status', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 50);
            $table->text('description')->nullable();
            $table->string('color', 50)->nullable();
            $table->integer('equal')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spot_shipment_status');
    }
}
