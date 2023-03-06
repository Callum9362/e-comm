<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerDashboardController extends Controller
{
    public function index($id)
    {
        $customer = Customer::find($id);

        if (!$customer) {
            abort(404);
        }

        return view('customers.info')
            ->with('customer', $customer);
    }
}
