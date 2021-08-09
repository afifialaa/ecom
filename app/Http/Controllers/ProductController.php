<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function create(Request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->status = $request->status;

        $product->supplier_id = $request->supplier_id;
        $product->category_id = $request->category_id;

        $product->save();
        return response('Product was created', 201);
    }

    public function index()
    {
        //
        $products = Product::all();
        return $products;
    }

    public function show($id)
    {
        //
        $product = Product::findOrFail($id);
        return $product;
    }

    public function update(Request $request, $id)
    {
        //
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->status = $request->status;

        $product->supplier_id = $request->supplier_id;
        $product->category_id = $request->category_id;

        $product->save();

        return response('Product was updated', 200);
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return response('Product was deleted', 200);
    }
}
