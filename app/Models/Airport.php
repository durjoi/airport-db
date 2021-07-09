<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    protected $fillable = [
        'airport_name'
    ];

    public function runways()
    {
        return $this->hasMany('App\Models\AirportRunway');
    }
}
