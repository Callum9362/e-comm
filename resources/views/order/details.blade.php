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
                        <div class="flex flex-col gap-4">
                            <label class="text-gray-500">Input Label 1</label>
                            <input type="text" class="border border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Input 1">
                            <label class="text-gray-500">Input Label 2</label>
                            <input type="text" class="border border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Input 2">
                        </div>
                    </div>
                    <div class="w-1/2 bg-white rounded-lg shadow-lg px-6 py-4">
                        <h2 class="text-lg font-medium mb-4 text-center">Payment Information</h2>
                        <div class="flex flex-col gap-4">
                            <label class="text-gray-500">Input Label 1</label>
                            <input type="text" class="border border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Input 1">
                            <label class="text-gray-500">Input Label 2</label>
                            <input type="text" class="border border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Input 2">
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
