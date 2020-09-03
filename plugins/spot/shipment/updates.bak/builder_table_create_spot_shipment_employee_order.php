<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentEmployeeOrder extends Migration
{
    public function up()
    {
        Schema::create('spot_shipment_employee_order', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('employee_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('spot_shipment_employee_order');
    }
}
