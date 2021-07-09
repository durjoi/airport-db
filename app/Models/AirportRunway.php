<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirportRunway extends Model
{
    use HasFactory;

    protected $fillable = [
        'airport_id',
        'runway_no',
        'runway_length',
        'runway_width'
    ];

    public function airport()
    {
        return $this->belongsTo('App\Models\Airport');
    }

    public function surface()
    {
        return $this->hasOne('App\Models\RunwaySurface');
    }
}
