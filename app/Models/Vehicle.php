<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $primaryKey = 'VehicleId';
    protected $table = 'vehicles';
    protected $fillable = [
        'brandId',
        'VehiclesTitle',
        'VehiclesOverview',
        'PricePerDay',
        'FuelType',
        'ModelYear',
        'SeatingCapacity',
        'Vimage1',
        'Vimage2',
        'Vimage3',
        'Vimage4',
        'Vimage5',
        'AirConditioner',
        'PowerDoorLocks',
        'AntiLockBrakingSystem',
        'BrakeAssist',
        'PowerSteering',
        'DriverAirbag',
        'PassengerAirbag',
        'CentralLocking',
        'CrashSensor',
        'LeatherSeats'
    ];
    public function brand()
    {
        return $this->belongsTo(Brands::class);
    }
    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
