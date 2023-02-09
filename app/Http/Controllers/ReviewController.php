<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function index()
    {
        return Review::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rating' => 'required|max:255',
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'customer_id' => 'required',
            'product_id' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $review = new Review;
        $review->rating = $request->get('rating');
        $review->title = $request->get('title');
        $review->description = $request->get('description');
        $review->customer_id = $request->get('customer_id');
        $review->product_id = $request->get('product_id');
        $review->save();

        return response()->json(['data' => $review], 201);
    }

    public function edit($id)
    {
        $review = Review::find($id);

        if(!$review)
        {
            return response()->json(['error' => 'Review not found'], 404);
        }
        return response()->json([ 'result' => 'ok', 'data' => $review], 201);
    }

    public function update($id, Request $request)
    {
        $review = Review::find($id);

        if(!$review)
        {
            return response()->json(['error' => 'Review not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'rating' => 'required|max:255',
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'customer_id' => 'required',
            'product_id' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $review->rating = $request->get('rating');
        $review->title = $request->get('title');
        $review->description = $request->get('description');
        $review->customer_id = $request->get('customer_id');
        $review->product_id = $request->get('product_id');
        $review->save();

        return response()->json([ 'msg' => "Review Updated!", 'data' => $review], 201);
    }
}
