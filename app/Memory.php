<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memory extends Model
{
    protected $fillable = [
        'model_id',
        'memory_internal',
        'memory_external',
        'ram'
    ];
}
