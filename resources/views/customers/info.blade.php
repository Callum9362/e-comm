<x-app-layout>
    <div class="p-6 bg-white rounded-lg shadow-md m-2">
        <div class="font-medium text-lg mb-2">Customer #{{ $customer->id }}</div>
        <div class="text-gray-600 text-sm">
            <span>Created on </span>
            <span class="float-right"></span>
        </div>
        <div class="text-sm mt-2">
            <span class="font-bold">Title:</span>
        </div>
        <div class="text-sm mt-2">
            <span class="font-bold">Body:</span>
        </div>
    </div>
</x-app-layout>
