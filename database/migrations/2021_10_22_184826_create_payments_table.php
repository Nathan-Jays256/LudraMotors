<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('paymentId');
            $table->integer('user_userId');
            $table->string('firstName');
            $table->string('lastName');
            $table->integer('bookingId');
            $table->string('paymentAmount');
            $table->string('address');
            $table->string('Contact');
            $table->string('payment_method');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('user_userId')->references('userId')->on('users')->onDelete('cascade');;
            $table->foreign('bookingId')->references('bookingId')->on('bookings')->onDelete('cascade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
