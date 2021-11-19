<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    protected $primaryKey = 'brandId';
    protected $fillable = [
        'brandName'
    ];
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'brandId');
    }
}
