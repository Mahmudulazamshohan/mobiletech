<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connectivity extends Model
{
    protected $fillable = [
        'wifi',
        'bluetooth',
        'usb',
        'fm_radio',
        'gps',
    ];
}
