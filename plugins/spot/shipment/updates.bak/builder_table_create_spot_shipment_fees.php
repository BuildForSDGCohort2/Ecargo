<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentFees extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_fees', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('type');
            $table->integer('from');
            $table->integer('to');
            $table->decimal('pickup_cost', 10, 0);
            $table->decimal('delivery_cost', 10, 0);
            $table->decimal('delivery_cost_back_sender', 10, 0);
            $table->decimal('delivery_cost_back_receiver', 10, 0);
            $table->decimal('back_cost_without_delivery_cost', 10, 0);
            $table->decimal('back_cost_sender', 10, 0);
            $table->decimal('back_cost_receiver', 10, 0);
            $table->decimal('partial_back_cost', 10, 0);
            $table->smallInteger('packaging');
            $table->text('packaging_fees');
        });
    }

    public function down()
    {
        Schema::dropIfExists('spot_shipment_fees');
    }
}
