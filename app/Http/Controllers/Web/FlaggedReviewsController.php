<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Request;

class FlaggedReviewsController extends Controller
{
    public function index()
    {
        $reviews = Cache::remember(
            'reviews.all.' . Request::get('page', 1), 60, function () {
            return Review::where('is_flagged', 1)->paginate(5);
        });

        return view('reviews.flagged')
            ->with('reviews', $reviews);
    }
}
