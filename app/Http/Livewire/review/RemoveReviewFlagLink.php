<?php

namespace App\Http\Livewire\review;

use App\Models\Review;
use Livewire\Component;

class RemoveReviewFlagLink extends Component
{
    public $reviewID;

    public function mount($reviewID)
    {
        $this->reviewID = $reviewID;
    }

    public function render()
    {
        return view('livewire.remove-review-flag-link')
            ->with('reviewID', $this->reviewID);
    }

    public function removeFlag()
    {
        $review = Review::find($this->reviewID);
        $review->is_flagged = 0;
        $review->save();
        return redirect()->route('flagged');
    }
}
