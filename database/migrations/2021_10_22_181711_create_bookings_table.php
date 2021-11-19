<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('bookingId');
            $table->integer('VehicleId');
            $table->integer('user_userId');
            $table->string('userEmail');
            $table->string('user_name');
            $table->string('bookingDate');
            $table->string('returnDate');
            $table->string('message')->nullable();
            $table->boolean('status')->nullable();
            $table->boolean('duration')->nullable();
            $table->timestamps();
            $table->foreign('VehicleId')->references('VehicleId')->on('vehicles')->onDelete('cascade');;
            $table->foreign('user_userId')->references('userId')->on('users')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
