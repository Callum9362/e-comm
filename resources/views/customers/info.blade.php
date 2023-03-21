<x-app-layout>
    <div class="p-6 bg-white rounded-lg shadow-md m-2">
        <div class="font-medium text-lg mb-2">Customer #{{ $customer->id }}</div>
        <div class="flex justify-content-between">
            <div id="personal">
                <h1>Personal Information</h1>
                <div class="text-gray-600 text-sm">
                    <span>{{ $customer->first_name }}</span> <span>{{ $customer->last_name }} </span>
                    <span>{{ $customer->email }}</span>
                    <span>{{ $customer->birth }}</span>
                    <span>{{ $customer->telephone }}</span>
                </div>
            </div>
        </div>
        <div id="personal" class="mt-2">
            <h1>Address Information</h1>
            <div class="text-gray-600 text-sm">
                @forelse($customer->address as $address)
                <span>{{ $address->street }}</span>
                @empty
                <span>No address information</span>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
