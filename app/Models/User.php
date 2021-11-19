<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'userId';
    protected $fillable = [
        'username',
        'email',
        'password',
        'contact',
        'dob',
        'address',
        'city',
        'country'
    ];
    public function testimonies(){
        return $this->hasMany(Testimonial::class);
    }
    public function feedbacks(){
        return $this->hasMany(ContactMessage::class);
    }
    public function subscribers(){
        return $this->hasMany(Subscribers::class);
    }
    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}