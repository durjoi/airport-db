<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RunwaySurface extends Model
{
    use HasFactory;

    protected $fillable = [
        'runway_id',
        'surface_type',
    ];

    public function runway()
    {
        return $this->belongsTo('App\Models\AirportRunway');
    }
}
