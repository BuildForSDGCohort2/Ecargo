<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentOffice extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_office', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 250);
            $table->string('code', 50)->nullable();
            $table->text('street')->nullable();
            $table->string('county', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('zipcode', 50)->nullable();
            $table->string('country', 50)->nullable();
            $table->string('lat', 50)->nullable();
            $table->string('lng', 50)->nullable();
            $table->text('url')->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('mobile', 50)->nullable();
            $table->string('mobile_2', 50)->nullable();
            $table->string('mobile_3', 50)->nullable();
            $table->integer('manger_id')->nullable();
            $table->integer('responsible_id')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spot_shipment_office');
    }
}
