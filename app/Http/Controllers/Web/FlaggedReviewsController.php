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
        $reviews =  Review::where('is_flagged', 1)->paginate(5);

        return view('reviews.flagged')
            ->with('reviews', $reviews);
    }

    public function edit($id)
    {
        $review = Review::find($id);

        return view('reviews.flagged-details')
            ->with('review', $review);
    }
}
