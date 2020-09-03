<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentTask extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_task', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('user_id');
            $table->string('title', 250);
            $table->text('description')->nullable();
            $table->string('status', 25);
            $table->text('comment')->nullable();
            $table->date('due_date');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spot_shipment_task');
    }
}
