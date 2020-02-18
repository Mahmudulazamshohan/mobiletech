<?php

namespace App\Repositories;

use App\Models;
use Illuminate\Support\Facades\Storage;

/**
 * Class ModelsRepository
 * @package App\Repositories
 */
class ModelsRepository
{
    private $models;

    public function __construct(Models $models)
    {
        $this->models = $models;

    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->models->get();
    }

    /**
     * Store Model Images
     * @param $request
     * @return bool|null
     */
    public function storeModelImage($request){
        $imageStore = null;
        if($request->hasFile('image')){
            $imageStore = Storage::put('images',$request->file('image'));
        }
        return $imageStore;
    }

}
