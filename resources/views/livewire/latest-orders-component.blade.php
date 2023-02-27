<div wire:poll.1800000ms>
    @foreach ($orders as $order)
        <div class="p-6 bg-white rounded-lg shadow-md m-2">
            <div class="font-medium text-lg mb-2"><a href="{{ route('order-details', ['id' => $order->id]) }}">Order #{{ $order->order_number }}</a></div>
            <div class="text-gray-600 text-sm">Created on {{ $order->created_at->format('M d, Y \a\t g:i A') }}</div>
        </div>
    @endforeach
</div>
