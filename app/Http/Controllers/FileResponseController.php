<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class FileResponseController extends Controller
{
    public function __construct()
    {
       // $this->middleware('cors');
    }
    public function images($file){
        return Response::file(storage_path('app/images/'.$file));
    }
}
