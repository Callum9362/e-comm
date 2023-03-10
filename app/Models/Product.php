<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function wishlists()
    {
        return $this->belongsToMany(Wishlist::class);
    }

    public function reviews()
    {
        return $this->belongsToMany(Review::class);
    }

}
