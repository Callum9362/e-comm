<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateCouponForm extends Component
{
    public $success;
    public $code;
    public $discount;
    public $type;
    public $from;
    public $to;
    public $limit;

    protected $rules = [
        'code' => 'required|unique:coupons|max:255',
        'discount' => 'required|max:255',
        'type' => 'required',
        'to' => 'required',
        'from' => 'required',
        'limit' => 'required',
    ];

    public function render()
    {
        return view('livewire.create-coupon-form');
    }

    public function createCoupon()
    {
        $this->validate();
    }
}
