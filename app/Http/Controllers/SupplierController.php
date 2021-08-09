<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $suppliers = Supplier::all();
        return $suppliers;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $supplier = new Supplier;

        $supplier->email = $request->email;
        $supplier->name = $request->name;
        $supplier->address = $request->address;
        $supplier->city = $request->city;
        $supplier->country = $request->country;
        $supplier->phone = $request->phone;
        $supplier->url = $request->url;

        $supplier->save();

        return response('Supplier was created', 201);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $supplier = Supplier::findOrFail($id);
        return $supplier;
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
    public function update(Request $request, $id)
    {
        //
        $supplier = Supplier::find($id);
        $supplier->email = $request->email;
        $supplier->name = $request->name;
        $supplier->address = $request->address;
        $supplier->country = $request->country;
        $supplier->city = $request->city;
        $supplier->phone = $request->phone;
        $supplier->url = $request->url;

        $supplier->save();

        return response('Supplier was updated', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Supplier::findOrFail($id)->delete();
        return response('Supplier was deleted', 200);
    }
}
