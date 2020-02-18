<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = [
        'model_id',
        'operating_system',
        'os_version',
        'user_interface',
        'cpu',
        'gpu',
        'chipset',
    ];
}
