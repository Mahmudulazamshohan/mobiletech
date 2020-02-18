<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
    protected $fillable = [
        'model_id',
        'body_dimensions',
        'body_weight',
        'build',
        'network_sim',
    ];
}
