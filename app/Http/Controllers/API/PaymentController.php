<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        return Payment::all();
    }

    public function edit($id)
    {
        $payment = Payment::find($id);

        if(!$payment)
        {
            return response()->json(['error' => 'Payment not found'], 404);
        }

        return response()->json(['message' => 'success', 'data' => $payment], 201);
    }
}
