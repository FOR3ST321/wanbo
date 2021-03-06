<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('user_id');
            $table->enum('status', ['pending', 'canceled', 'failed', 'paid', 'booked', 'done']);
            $table->string('unique_id')->nullable();
            $table->integer('total_price');
            $table->integer('total_time');
            $table->dateTime('schedule');
            $table->dateTime('checkin')->nullable();
            $table->dateTime('checkout')->nullable();

            $table->timestamps();
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
