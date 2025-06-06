<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'email',
        'latitude',
        'longitude',
        'radius_km',
        'time_in',
        'time_out',
    ];
}
