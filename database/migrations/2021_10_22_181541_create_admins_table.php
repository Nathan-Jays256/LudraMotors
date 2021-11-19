<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('adminId');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->timestamps();
        });
        DB::table('admins')->insert([
            ['name' => '1', 'public' => true],
            ['username' => 'admin', 'public' => true],
            ['password' => 'admin@123', 'public' => true],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
