<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressUpdaterController extends Controller
{
    public function index($id)
    {
        $address = Address::find($id);
        return view('address.updater')
            ->with('address', $address);
    }
}
