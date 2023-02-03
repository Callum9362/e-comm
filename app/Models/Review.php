<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function customer()
    {
        $this->belongsTo(Customer::class);
    }

    public function product()
    {
        $this->belongsTo(Product::class);
    }
}
