<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string("phone")->default("+234-7062-454-882");
            $table->string('email')->unique();
            $table->string("dateOfBirth")->default("N/A");
            $table->string('gender')->default("N/A");
            $table->string("occupation")->default("N/A");
            $table->string("state")->default("N/A");
            $table->string("address")->default("N/A");
            $table->string('password');
            $table->integer("role_id");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
