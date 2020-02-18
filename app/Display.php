<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Display extends Model
{
    protected $fillable = [
        'model_id',
        'display_type',
        'display_size',
        'display_resolution',
        'display_multitouch',
        'display_density',
        'display_screen_protection',
    ];
}
