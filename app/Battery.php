<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Battery extends Model
{
    protected $fillable = [
        'model_id',
        'battery_type',
        'battery_capacity',
        'battery_charging'
    ];
}
