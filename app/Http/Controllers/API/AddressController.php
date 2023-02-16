<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddressController extends Controller
{
   public function index()
   {
       return Address::all();
   }

   public function store(Request $request)
   {
       $validator = Validator::make($request->all(), [
           'type' => 'required|max:255',
           'street' => 'required|max:255',
           'city' => 'required|max:255',
           'state' => 'required',
           'country' => 'required',
           'zip' => 'required',
           'customer_id' => 'required'
       ]);

       if($validator->fails()) {
           return response()->json(['errors' => $validator->errors()], 422);
       }

       $address = new Address;
       $address->type = $request->get('type');
       $address->street = $request->get('street');
       $address->city = $request->get('city');
       $address->state = $request->get('state');
       $address->country = $request->get('country');
       $address->zip = $request->get('zip');
       $address->customer_id = $request->get('customer_id');
       $address->save();

       return response()->json(['msg' => 'Address Created!', 'data' => $address], 201);
   }

   public function edit($id)
   {
       $address = Address::find($id);

       if(!$address)
       {
           return response()->json(['error' => 'Address not found'], 404);
       }

       return response()->json(['msg' => 'Address Found!', 'data' => $address], 201);
   }

    public function update($id, Request $request)
    {
        $address = Address::find($id);

        if(!$address)
        {
            return response()->json(['error' => 'Address not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'type' => 'required|max:255',
            'street' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required',
            'country' => 'required',
            'zip' => 'required',
            'customer_id' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $address->type = $request->get('type');
        $address->street = $request->get('street');
        $address->city = $request->get('city');
        $address->state = $request->get('state');
        $address->country = $request->get('country');
        $address->zip = $request->get('zip');
        $address->customer_id = $request->get('customer_id');
        $address->save();

        return response()->json(['msg' => 'Address Updated!', 'data' => $address], 201);
    }

    public function delete($id)
    {
        $address = Address::find($id);

        if(!$address)
        {
            return response()->json(['error' => 'Address not found'], 404);
        }

        $address->delete();
        return response()->json(['msg' => 'Address deleted successfully'], 201);
    }
}
