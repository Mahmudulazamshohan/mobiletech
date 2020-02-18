<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    protected $fillable = [
        'sensors',
        'messaging',
        'browser',
        'java',
    ];
}
