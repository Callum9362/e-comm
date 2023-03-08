<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class CancelledOrderTable extends Component
{
    public $success;

    protected $listeners = ['orderRestored' => '$refresh'];

    public function render()
    {
        $orders = Order::where('order_status', 'cancelled')->paginate(5);
        return view('livewire.cancelled-order-table')
            ->with('orders', $orders);
    }

    public function restore($id)
    {
        $order = Order::find($id);
        $order->order_status = "in-progress";
        $order->save();
        $this->success = 'Order was restored successfully!';
        $this->emit('orderRestored');
    }
}
