<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentActivity extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_activity', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('order_id');
            $table->string('description', 50)->nullable();
            $table->text('other');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spot_shipment_activity');
    }
}
