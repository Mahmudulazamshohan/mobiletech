<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sound extends Model
{
    protected $fillable = [
        'audio',
        'loudspeaker',
        'jack'
    ];
}
