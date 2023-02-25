<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="m-2 text-center">Order Details - #{{ $order->order_number }}</h3>
                </div>

                <hr>

                <div class="flex justify-between mt-3">
                    <div class="w-1/2 bg-white rounded-lg shadow-lg px-6 py-4 mr-2">
                        <h2 class="text-lg font-medium mb-4 text-center">Customer Information</h2>
                        <div class="flex flex-col gap-3">
                            <label class="text-gray-500">Full Name</label>
                            <input type="text" value="{{ $order->customer->first_name . " " . $order->customer->last_name }}" class="border bg-gray-100 border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
                            <label class="text-gray-500">Date of Birth</label>
                            <input type="text" value="{{ $order->customer->birth }}" class="border bg-gray-100 border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
                            <label class="text-gray-500">Email</label>
                            <input type="text" value="{{ $order->customer->email }}" class="border bg-gray-100 border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
                            <label class="text-gray-500">Telephone</label>
                            <input type="text" value="{{ $order->customer->telephone }}" class="border bg-gray-100 border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
                        </div>
                    </div>
                    <div class="w-1/2 bg-white rounded-lg shadow-lg px-6 py-4">
                        <h2 class="text-lg font-medium mb-4 text-center">Payment Information</h2>
                        <div class="flex flex-col gap-3">
                            <label class="text-gray-500">Method</label>
                            <input type="text" value="{{ $order->payment->method }}" class="border bg-gray-100 border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
                            <label class="text-gray-500">Status</label>
                            <input type="text" value="{{ $order->payment->status }}" class="border @if($order->payment->status === 'Complete') bg-green-200 @else bg-red-500 @endif border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
                            <label class="text-gray-500">Date</label>
                            <input type="text" value="{{ $order->payment->created_at->format('M d, Y \a\t g:i A') }}" class="border bg-gray-100 border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between mt-3">
                    <div class="w-1/2 bg-white rounded-lg shadow-lg px-6 py-4 mr-2">
                        <h2 class="text-lg font-medium mb-4 text-center">Shipping</h2>
                        <div class="flex flex-col gap-3">
                            <label class="text-gray-500">Vendor</label>
                            <input type="text" value="{{ $order->shipping->method }}" class="border bg-gray-100 border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
                            <label class="text-gray-500">Status</label>
                            <input type="text" value="{{ $order->shipping->status }}" class="border bg-gray-100 border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
                            <label class="text-gray-500">Sent Out</label>
                            <input type="text" value="{{ $order->shipping->date }}" class="border bg-gray-100 border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
                        </div>
                    </div>

                    <div class="w-1/2 bg-white rounded-lg shadow-lg px-6 py-4 mr-2">
                        <h2 class="text-lg font-medium mb-4 text-center">Address Information</h2>
                        <div class="flex flex-col gap-3">
                            <label class="text-gray-500">Street</label>
                            <input type="text" value="{{ $order->shipping->address->street }}" class="border bg-gray-100 border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
                            <label class="text-gray-500">City</label>
                            <input type="text" value="{{ $order->shipping->address->city }}" class="border bg-gray-100 border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
                            <label class="text-gray-500">State</label>
                            <input type="text" value="{{ $order->shipping->address->state }}" class="border bg-gray-100 border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
                            <label class="text-gray-500">ZIP</label>
                            <input type="text" value="{{ $order->shipping->address->zip }}" class="border bg-gray-100 border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
                            <label class="text-gray-500">Country</label>
                            <input type="text" value="{{ $order->shipping->address->country }}" class="border bg-gray-100 border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between">
                    <p class="m-2 font-bold">Created At - Created on {{ $order->created_at->format('M d, Y \a\t g:i A') }}</p>
                    <p class="m-2 font-bold">Last Update {{ $order->updated_at->format('M d, Y \a\t g:i A') }}</p>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
