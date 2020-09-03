<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentItem extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_item', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('category_id');
            $table->text('description');
            $table->integer('quantity')->default(1);
            $table->integer('weight')->nullable();
            $table->integer('length')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->integer('status');
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('spot_shipment_item');
    }
}
