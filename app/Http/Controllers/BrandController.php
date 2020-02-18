<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands =Brand::all();
        return view('Brand.show',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);
        $brand = new Brand();
        $brand->name = $request->name;
        $image =null;
        if($request->hasFile('image')){
            $image = Storage::put('images',$request->file('image'));
        }
        $brand->image = $image;

        $brand->save();

        if($brand){
            return redirect()
                ->route('brand.index')
                ->with('success','Brand Created Successfully');
        }else{
            return redirect()
                ->back()
                ->with('failed','Brand Create failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return  view('brand.edit',compact('brand'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);
        $brand->name = $request->name;
        $image = null;
        if($request->hasFile('image')){
            Storage::delete($brand->image);
            $image = Storage::put('images',$request->file('image'));

        }
        $brand->image = $image;

        $brand->save();

        if($brand){
            return redirect()
                ->back()
                ->with('success','Brand Updated Successfully');
        }else{
            return redirect()
                ->back()
                ->with('failed','Brand Updated failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        if($brand){
            return redirect()
                ->back()
                ->with('success','Brand Deleted Successfully');
        }else{
            return redirect()
                ->back()
                ->with('failed','Brand Deleted failed');
        }
    }
}
