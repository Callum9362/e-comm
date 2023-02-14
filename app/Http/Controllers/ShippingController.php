<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShippingController extends Controller
{
    public function index()
    {
        return Shipping::all();
    }

    // Edit by ID
    public function edit($id)
    {
        $shipping = Shipping::find($id);

        if(!$shipping)
        {
            return response()->json(['error' => 'Shipping information not found'], 404);
        }

        return response()->json(['msg' => 'Shipping information Found!', 'data' => $shipping], 201);
    }

    // Update by ID
    public function update($id, Request $request)
    {
        $shipping = Shipping::find($id);

        if(!$shipping)
        {
            return response()->json(['error' => 'Shipping information not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'method' => 'required|max:255',
            'status' => 'required|max:255',
            'date' => 'required|max:255',
            'address_id' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $shipping->method = $request->get('method');
        $shipping->status = $request->get('status');
        $shipping->date = $request->get('date');
        $shipping->address_id = $request->get('address_id');

        $shipping->save();

        return response()->json(['msg' => 'Shipping information updated!', 'data' => $shipping], 422);

    }

    // Store
    public function store(Request $request)
    {

    }

    // Delete
    public function delete($id, Request $request)
    {

    }
}
