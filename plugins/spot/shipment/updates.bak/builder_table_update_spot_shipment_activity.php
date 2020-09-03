<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSpotShipmentActivity extends Migration
{
    public function up()
    {
        Schema::table('spot_shipment_activity', function($table)
        {
            $table->string('lat', 200)->nullable();
            $table->string('lng', 200)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('spot_shipment_activity', function($table)
        {
            $table->dropColumn('lat');
            $table->dropColumn('lng');
        });
    }
}
