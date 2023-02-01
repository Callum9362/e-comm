<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        return  Product::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required',
            'stock' => 'required',
            'category_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $product = new Product;
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->stock = $request->get('stock');
        $product->category_id = $request->get('category_id');
        $product->save();

        return response()->json(['data' => $product], 201);
    }

    public function update($id, Request $request)
    {
        $product = Product::find($id);

        if(!$product) {
            return response()->json(['error' => 'Coupon not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required',
            'stock' => 'required',
            'category_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->stock = $request->get('stock');
        $product->category_id = $request->get('category_id');
        $product->save();

        return response()->json([ 'msg' => "Product Updated!", 'data' => $product], 201);
    }

    public function delete($id)
    {
        $product = Product::find($id);

        if(!$product) {
            return response()->json(['error' => 'Coupon not found'], 404);
        }
        $product->delete();

        return response()->json(['msg' => 'Product deleted successfully'], 201);
    }
}
