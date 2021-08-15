<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function create(Request $request){

        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;

        $customer->country = $request->country;
        $customer->city = $request->city;
        $customer->district = $request->district;
        $customer->street = $request->street;
        $customer->building = $request->building;
        $customer->apartment_no = $request->apartment_no;
        $customer->address1 = $request->address1;
        $customer->address2 = $request->address2;

        $customer->phone = $request->phone;
        $customer->credit_card = $request->credit_card;

        $customer->save();
        return response('Cusomter was created', 201);
    }

    public function index(){
        $customers = Customer::all();
        return $customers;
    }

    public function show($id){
        $customer = Customer::findOrFail($id);
        return $customer;
    }

    public function update(Request $request, $id){
        $customer = Customer::find($id);

        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;

        $customer->country = $request->country;
        $customer->city = $request->city;
        $customer->street = $request->street;
        $customer->building = $request->building;
        $customer->apartment_no = $request->apartment_no;
        $customer->address1 = $request->address1;
        $customer->address2 = $request->address2;

        $customer->phone = $request->phone;
        $customer->credit_card = $request->credit_card;

        $customer->save();
        return response('Customer was updated', 200);
    }

    public function destroy($id){
        Customer::findOrFail($id)->delete();
        return response('Customer was deleted', 200);
    }
}
