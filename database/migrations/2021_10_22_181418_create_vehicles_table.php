<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('VehicleId');
            $table->integer('brandId')->nullable();
            $table->string('VehiclesTitle')->nullable();
            $table->text('VehiclesOverview')->nullable();
            $table->integer('PricePerDay')->nullable();
            $table->string('FuelType')->nullable();
            $table->integer('ModelYear')->nullable();
            $table->integer('SeatingCapacity')->nullable();
            $table->string('Vimage1')->nullable();
            $table->string('Vimage2')->nullable();
            $table->string('Vimage3')->nullable();
            $table->string('Vimage4')->nullable();
            $table->string('Vimage5')->nullable();
            $table->boolean('AirConditioner')->nullable()->default(false);
            $table->boolean('PowerDoorLocks')->nullable()->default(false);
            $table->boolean('AntiLockBrakingSystem')->nullable()->default(false);
            $table->boolean('BrakeAssist')->nullable()->default(false);
            $table->boolean('PowerSteering')->nullable()->default(false);
            $table->boolean('DriverAirbag')->nullable()->default(false);
            $table->boolean('PassengerAirbag')->nullable()->default(false);
            $table->boolean('CDPlayer')->nullable()->default(false);
            $table->boolean('CentralLocking')->nullable()->default(false);
            $table->boolean('CrashSensor')->nullable()->default(false);
            $table->boolean('LeatherSeats')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('brandId')->references('brandId')->on('brands')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
