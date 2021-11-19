<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('user_userId');
            $table->string('fullName')->nullable();
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('contact_messages');
    }
}
