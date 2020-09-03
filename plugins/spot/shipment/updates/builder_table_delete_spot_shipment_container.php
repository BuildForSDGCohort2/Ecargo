<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSpotShipmentContainer extends Migration
{
    public function up()
    {
        Schema::dropIfExists('spot_shipment_container');
    }
    
    public function down()
    {
        Schema::create('spot_shipment_container', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
}
