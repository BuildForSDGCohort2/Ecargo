<?php namespace spot\Container\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotContainerCustomer extends Migration
{
    public function up()
    {
        Schema::create('spot_container_customer', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('username', 100);
            $table->string('password', 100);
            $table->string('display_name', 100);
            $table->string('email', 200);
            $table->string('contact_email', 200);
            $table->string('vat_number', 50);
            $table->integer('badget');
            $table->text('street');
            $table->integer('country');
            $table->integer('city');
            $table->string('postcode', 50);
            $table->string('number', 100);
            $table->string('box', 100);
            $table->string('language', 100);
            $table->integer('clearance');
            $table->integer('payment_term');
            $table->integer('fiscal_representation');
            $table->integer('storage_fee');
            $table->integer('cost_24');
            $table->integer('cost_28');
            $table->integer('kg_price');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('spot_container_customer');
    }
}
