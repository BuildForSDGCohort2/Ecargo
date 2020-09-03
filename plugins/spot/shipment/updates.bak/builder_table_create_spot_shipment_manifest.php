<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentManifest extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_manifest', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('date');
            $table->integer('car_id')->nullable();
            $table->integer('driver_id')->nullable();
            $table->integer('employee_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->text('areas')->nullable();
            $table->integer('status')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spot_shipment_manifest');
    }
}
