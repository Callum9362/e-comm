<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function index()
   {
       return Customer::all();
   }

   public function store(Request $request)
   {
       $request->validate([
           'first_name' => 'required|max:255',
           'last_name' => 'required|max:255',
           'email' => 'required|email|unique:customers',
           'birth' => 'required',
           'telephone' => 'required'
       ]);

       $customer = new Customer;
       $customer->first_name = $request->get('first_name');
       $customer->last_name = $request->get('last_name');
       $customer->email = $request->get('email');
       $customer->birth = $request->get('birth');
       $customer->telephone = $request->get('telephone');
       $customer->save();

       return response()->json(['data' => $customer], 201);
   }
}
