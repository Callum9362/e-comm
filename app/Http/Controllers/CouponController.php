<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
   public function index()
   {
       return  Coupon::all();
   }

   public function store(Request $request)
   {
       $validator = Validator::make($request->all(), [
           'code' => 'required|unique:coupons|max:255',
           'discount' => 'required|max:255',
           'type' => 'required',
           'start_date' => 'required',
           'end_date' => 'required',
           'usage_limit' => 'required',
       ]);

       if ($validator->fails()) {
           return response()->json(['errors' => $validator->errors()], 422);
       }

       $coupon = new Coupon;
       $coupon->code = $request->get('code');
       $coupon->discount = $request->get('discount');
       $coupon->type = $request->get('type');
       $coupon->start_date = $request->get('start_date');
       $coupon->end_date = $request->get('end_date');
       $coupon->usage_limit = $request->get('usage_limit');
       $coupon->save();

       return response()->json(['data' => $coupon], 201);
   }

    public function update($id, Request $request)
    {
        $coupon = Coupon::find($id);

        if(!$coupon) {
            return response()->json(['error' => 'Coupon not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:coupons|max:255',
            'discount' => 'required|max:255',
            'type' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'usage_limit' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $coupon->code = $request->get('code');
        $coupon->discount = $request->get('discount');
        $coupon->type = $request->get('type');
        $coupon->start_date = $request->get('start_date');
        $coupon->end_date = $request->get('end_date');
        $coupon->usage_limit = $request->get('usage_limit');
        $coupon->save();

        return response()->json([ 'msg' => "Coupon Updated!", 'data' => $coupon], 201);
    }

    public function delete($id)
    {
        $coupon = Coupon::find($id);

        if (!$coupon) {
            return response()->json(['error' => 'Coupon not found'], 404);
        }

        $coupon->delete();
        return response()->json(['msg' => 'Coupon deleted successfully'], 201);
    }
}
