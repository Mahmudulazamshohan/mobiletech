<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    protected $fillable = [
        'model_id',
        'network_type',
        'network_2g',
        'network_3g',
        'network_4g',
        'network_5g',
        'speed',
        'gprs',
        'edge',
    ];
}
