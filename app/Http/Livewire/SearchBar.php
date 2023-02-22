<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class SearchBar extends Component
{
    public $query;
    public $searchResults;

    public function updatedQuery()
    {
        $this->searchResults = Order::where('order_number', 'like', '%'.$this->query.'%')
            ->take(10)
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.search-bar')
            ->with('searchResults', $this->searchResults);
    }
}
