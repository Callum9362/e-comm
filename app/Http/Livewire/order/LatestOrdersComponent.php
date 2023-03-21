<?php

namespace App\Http\Livewire\order;

use App\Models\Order;
use Livewire\Component;

class LatestOrdersComponent extends Component
{
    public $orders;

    public function mount()
    {
        $this->orders =  $this->getLatestOrders();
    }

    public function render()
    {
        return view('livewire.latest-orders-component', [
            'orders' => $this->orders,
        ]);
    }

    private function getLatestOrders()
    {
        return Order::latest()->take(10)->get();
    }
}
