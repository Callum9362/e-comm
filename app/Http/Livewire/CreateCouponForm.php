<?php

namespace App\Http\Livewire;

use App\Models\Coupon;
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

        $coupon = new Coupon;
        $coupon->code = $this->code;
        $coupon->discount = $this->discount;
        $coupon->type = $this->type;
        $coupon->start_date = $this->from;
        $coupon->end_date = $this->to;
        $coupon->usage_limit = $this->limit;

        $coupon->save();

        $this->success = 'Coupon was created successfully!';
        $this->refresh();
    }

    public function refresh()
    {
        $this->code = '';
        $this->discount = '';
        $this->type = '';
        $this->from = '';
        $this->to = '';
        $this->limit = '';
    }
}
