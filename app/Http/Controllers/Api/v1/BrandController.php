<?php

namespace App\Http\Controllers\Api\v1;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\CategoryResource;
use Illuminate\Http\Request;
use App\Brand;

use App\Http\Resources\v1\BrandCollection;
use App\Http\Resources\v1\BrandResource;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return new  BrandCollection(Brand::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'brand_name' => 'required',
            'brand_desc' => 'required',
            'brand_status' => 'required',
        ]);
        $brand = Brand::create($request->all());
        return new BrandResource($brand);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
        return new BrandResource($brand);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Brand $brand)
    {
        //
        $request->validate([
            'brand_name' => 'required',
            'brand_desc' => 'required',
            'brand_status' => 'required',
        ]);
        $brand->update($request->all());

        return new BrandResource($brand);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
        $brand->delete();
    }
}
