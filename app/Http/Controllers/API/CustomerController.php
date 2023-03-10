<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
   public function index()
   {
       return Customer::all();
   }

   public function store(Request $request)
   {
       $validator = Validator::make($request->all(), [
           'first_name' => 'required|max:255',
           'last_name' => 'required|max:255',
           'email' => 'required|email|unique:customers',
           'birth' => 'required',
           'telephone' => 'required'
       ]);

       if ($validator->fails()) {
           return response()->json(['errors' => $validator->errors()], 422);
       }

       $customer = new Customer;
       $customer->first_name = $request->get('first_name');
       $customer->last_name = $request->get('last_name');
       $customer->email = $request->get('email');
       $customer->birth = $request->get('birth');
       $customer->telephone = $request->get('telephone');
       $customer->save();

       return response()->json(['data' => $customer], 201);
   }

   public function update($id, Request $request)
   {
       $customer = Customer::find($id);

       if (!$customer) {
           return response()->json(['error' => 'Customer not found'], 404);
       }

       $validator = Validator::make($request->all(), [
           'first_name' => 'required|max:255',
           'last_name' => 'required|max:255',
           'email' => 'required|email|unique:customers',
           'birth' => 'required',
           'telephone' => 'required'
       ]);

       if ($validator->fails()) {
           return response()->json(['errors' => $validator->errors()], 422);
       }

       $customer->first_name = $request->get('first_name');
       $customer->last_name = $request->get('last_name');
       $customer->email = $request->get('email');
       $customer->birth = $request->get('birth');
       $customer->telephone = $request->get('telephone');
       $customer->save();

       return response()->json([ 'msg' => "Customer Updated!", 'data' => $customer], 201);
   }

   public function delete($id)
   {
       $customer = Customer::find($id);

       if (!$customer) {
           return response()->json(['error' => 'Customer not found'], 404);
       }

       $customer->delete();
       return response()->json(['message' => 'Customer deleted successfully'], 201);
   }
}
