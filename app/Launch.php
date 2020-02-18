<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Launch extends Model
{
    protected $fillable = [
        'model_id',
        'launch_announcement',
        'launch_date',
    ];
}
