<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $primaryKey = 'bookingId';
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function vehicle()
    {
    	return $this->belongsTo(Vehicle::class);
    }

}
