<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Resources\v1\CategoryResource;
use App\Http\Resources\v1\CategoryCollection;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return new  CategoryCollection(Category::paginate(3));

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
        /* $this->validate($request, [
            'category_name' => 'required',
            'category_desc' => 'required',
            'category_status' => 'required',
        ]);

        return Category::create([
            'category_name' => $request->category_name,
            'category_desc' => $request->category_desc,
            'category_status' => $request->category_status,
        ]); */

        $request->validate([
            'category_name' => 'required',
            'category_desc' => 'required',
            'category_status' => 'required',
        ]);
        $category = Category::create($request->all());
        return new CategoryResource($category);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        return new CategoryResource($category);
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
    public function update(Request $request,Category $category)
    {
        //
        $request->validate([
            'category_name' => 'required',
            'category_desc' => 'required',
            'category_status' => 'required',
        ]);
        $category->update($request->all());

        return new CategoryResource($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();

    }
}
