<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentOrder extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_order', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('office_id');
            $table->string('number', 50);
            $table->smallInteger('type');
            $table->integer('sender_id');
            $table->integer('sender_address_id')->nullable();
            $table->integer('receiver_id')->nullable();
            $table->integer('receiver_address_id')->nullable();
            $table->integer('packaging_id');
            $table->date('ship_date')->nullable();
            $table->date('receive_date')->nullable();
            $table->integer('courier_id')->nullable();
            $table->integer('delivery_time_id')->nullable();
            $table->date('delivery_date')->nullable();
            $table->integer('mode_id')->nullable();
            $table->integer('status_id');
            $table->integer('tax')->nullable();
            $table->integer('insurance')->nullable();
            $table->integer('currency_id');
            $table->smallInteger('payment_type')->nullable();
            $table->decimal('customs_value', 10, 2)->nullable();
            $table->decimal('courier_fee', 10, 2)->nullable();
            $table->decimal('package_fee', 10, 2)->nullable();
            $table->smallInteger('return_package_fee')->nullable();
            $table->decimal('return_courier_fee', 10, 2)->nullable();
            $table->smallInteger('return_defray')->nullable();
            $table->integer('manifest_id')->nullable();
            $table->string('channel', 20)->default('backend');
            $table->integer('assigned_id')->nullable();
            $table->integer('requested')->default(0)->nullable();
            $table->smallInteger('postponed')->nullable();
            $table->string('barcode', 50)->unique();
            $table->text('esign')->nullable();
            $table->integer('delivered_by')->nullable();
            $table->integer('delivered_responsiable')->nullable();
            $table->string('received_by')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spot_shipment_order');
    }
}
