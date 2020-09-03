<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentPayment extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_payment', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('type');
            $table->integer('for_id');
            $table->integer('movement');
            $table->string('other', 300)->nullable();
            $table->text('description')->nullable();
            $table->decimal('amount', 10, 2);
            $table->integer('status')->default(1);
            $table->date('date');
            $table->integer('item_id')->nullable();
            $table->string('payment_type', 25)->nullable();
            $table->integer('payment_with')->nullable();
            $table->integer('treasury_id')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spot_shipment_payment');
    }
}
