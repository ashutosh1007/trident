<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_firstname');
            $table->string('customer_lastname');
            $table->string('customer_email');
            $table->string('customer_mobile');
            $table->string('customer_password');
            $table->string('customer_gender');
            $table->string('customer_email_verified');
            $table->string('customer_mobile_verified');
            $table->string('customer_dob');
            $table->timestamps();
            $table->string('deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
