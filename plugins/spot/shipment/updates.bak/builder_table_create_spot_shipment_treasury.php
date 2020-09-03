<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentTreasury extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_treasury', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->smallInteger('default')->default(0);
            $table->integer('office_id')->nullable();
            $table->string('name', 150);
            $table->decimal('balance', 11, 2)->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('spot_shipment_treasury');
    }
}
