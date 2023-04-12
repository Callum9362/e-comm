<x-app-layout>
    <div class="mx-auto w-1/2 bg-white rounded-lg shadow-lg px-6 py-4">
        <h2 class="text-lg font-medium mb-4 text-center underline">Address Information</h2>
        <div class="flex flex-col gap-3">
            <label class="text-gray-500">Street</label>
            <input type="text" value="{{ $address->street }}" class="info-input" readonly>
            <label class="text-gray-500">City</label>
            <input type="text" value="{{ $address->city }}" class="info-input" readonly>
            <label class="text-gray-500">State</label>
            <input type="text" value="{{ $address->state }}" class="info-input" readonly>
            <label class="text-gray-500">ZIP</label>
            <input type="text" value="{{ $address->zip }}" class="info-input" readonly>
            <label class="text-gray-500">Country</label>
            <input type="text" value="{{ $address->country }}" class="info-input" readonly>
        </div>
    </div>
</x-app-layout>
