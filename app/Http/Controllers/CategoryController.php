<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(Request $request){
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();
        return response('Category was created', 201);
    }

    public function index()
    {
        //
        $categories = Category::all();
        return $categories;
    }

    public function show($id)
    {
        //
        $category = Category::findOrFail($id);
        return $category;
    }

    public function update(Request $request, $id)
    {
        //
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();

        return response('Category was updated', 200);
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return response('Category was deleted', 200);
    }
}
