<?php

namespace App\Http\Controllers\Api;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;

use App\Http\Resources\DefaultResource;
use App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ModelController extends Controller
{
    public function __construct()
    {
        $this->middleware('cors');
    }

    public function index()
    {
        $models = Models::with(
            'Brand',
            'Category',
            'Network',
            'Launch',
            'Body',
            'Display',
            'Platform',
            'Memory',
            'Camera',
            'Sound',
            'Connectivity',
            'Features',
            'Battery',
            'More')->paginate(40);
        $brands = Brand::all();
        $categories = Category::all();

        return new DefaultResource([
            'brands' => $brands,
            'categories' => $categories,
            'models' => $models
        ]);
    }

    public function search(Request $request)
    {

    }
}
