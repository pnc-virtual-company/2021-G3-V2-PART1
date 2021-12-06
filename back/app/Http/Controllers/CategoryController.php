<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Category::latest()->get();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'categoryName' => 'required|unique:categories|min:3|max:30',
        ]);
        $category = new Category();
        $category->categoryName = $request->categoryName;
        $category->save();

        return response()->json(['Message' => 'Create Category Succesfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Category::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Create Validation
        $request->validate([
            'categoryName' => 'required|unique:categories|min:3|max:30',
        ]);

        $category =  Category::findOrFail($id);
        $category->categoryName = $request->categoryName;
        $category->save();

        return response()->json(['Message' => 'Update Category Succesfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Category::destroy($id);
        if($isDelete == 1) 
            return response()->json(['message' => 'Category deleted successfully'], 200);
        return response()->json(['message' => 'ID NOT EXIST'], 404);
    }
    /**
     * Search item name.
     *
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return Category::where('categoryName','like', '%'. $name . '%')->get();
    }
}
