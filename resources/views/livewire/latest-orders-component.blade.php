<div wire:poll.1800000ms>
    @foreach ($orders as $order)
        <div class="p-6 bg-white rounded-lg shadow-md">
            <div class="font-medium text-lg mb-2">Order #{{ $order->order_number }}</div>
            <div class="text-gray-600 text-sm">Created on {{ $order->created_at->format('M d, Y \a\t g:i A') }}</div>
        </div>
    @endforeach
</div>
