<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    protected $fillable = [
        'model_id',
        'primary_camera',
        'secondary_camera',
        'camera_features',
        'video',
    ];
}
