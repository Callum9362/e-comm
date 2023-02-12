<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use Illuminate\Http\Request;

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
