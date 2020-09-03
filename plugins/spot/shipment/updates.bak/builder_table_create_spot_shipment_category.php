<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentCategory extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->text('description')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spot_shipment_category');
    }
}
