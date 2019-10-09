<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_addresses', function (Blueprint $table) {
            $table->increments('order_id');
            $table->string('user_id');
            $table->string('order_name');
            $table->string('order_mobile');
            $table->string('order_address');
            $table->string('order_landmark');
            $table->string('order_area');
            $table->string('order_city');
            $table->string('order_state');
            $table->string('order_additional');
            $table->string('order_pin');
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
        Schema::dropIfExists('order_addresses');
    }
}
