<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentAddress extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_address', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name', 250);
            $table->text('street');
            $table->string('county', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('zipcode', 50)->nullable();
            $table->string('country', 50);
            $table->string('lat', 50);
            $table->string('lng', 50);
            $table->text('url');
            $table->smallInteger('default');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spot_shipment_address');
    }
}
