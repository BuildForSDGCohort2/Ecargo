<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSpotShipmentPayment extends Migration
{
    public function up()
    {
        Schema::table('spot_shipment_payment', function($table)
        {
            $table->string('payment_method', 20)->nullable()->default('cash');
            $table->string('payment_gateway', 50)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('spot_shipment_payment', function($table)
        {
            $table->dropColumn('payment_method');
            $table->dropColumn('payment_gateway');
        });
    }
}
