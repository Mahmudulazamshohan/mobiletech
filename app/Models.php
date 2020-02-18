<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    protected $fillable = [
        'brand_id',
        'category_id',
        'name',
        'image',
        'model_name',
        'old_price',
        'current_price',
    ];
    protected $appends =[
      'image_loaded',
       'image_url'
    ];
    public function getImageloadedAttribute()
    {
        return false;
    }
    public function getImageUrlAttribute(){
        return url($this->image);
    }

    public function Brand(){
        return $this->hasOne(Brand::class,'id','brand_id');
    }
    public function Category(){
        return $this->hasOne(Category::class,'id','category_id');
    }
    public function Network()
    {
        return $this->hasOne(Network::class, 'model_id', 'id');
    }

    public function Launch()
    {
        return $this->hasOne(Launch::class, 'model_id', 'id');
    }

    public function Body()
    {
        return $this->hasOne(Body::class, 'model_id', 'id');
    }

    public function Display()
    {
        return $this->hasOne(Display::class, 'model_id', 'id');
    }

    public function Platform()
    {
        return $this->hasOne(Platform::class, 'model_id', 'id');
    }

    public function Memory()
    {
        return $this->hasOne(Memory::class, 'model_id', 'id');
    }

    public function Camera()
    {
        return $this->hasOne(Camera::class, 'model_id', 'id');
    }

    public function Sound()
    {
        return $this->hasOne(Sound::class, 'model_id', 'id');
    }

    public function Connectivity()
    {
        return $this->hasOne(Connectivity::class, 'model_id', 'id');
    }

    public function Features()
    {
        return $this->hasOne(Features::class, 'model_id', 'id');
    }

    public function Battery()
    {
        return $this->hasOne(Battery::class, 'model_id', 'id');
    }

    public function More()
    {
        return $this->hasOne(More::class, 'model_id', 'id');
    }
}
