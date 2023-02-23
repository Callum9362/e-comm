<div class="relative">
    <input type="text" class="w-full px-4 m-2 py-2 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium" placeholder="Search orders..." wire:model.debounce.500ms="query">
    @if (!empty($searchResults))
        <div class="absolute top-10 left-0 w-full bg-white rounded-lg shadow-lg z-50">
            @foreach ($searchResults as $result)
                <a href="{{ route('order-details', ['id' => $result['id']]) }}" class="block px-4 py-2 hover:bg-gray-100 transition ease-in-out duration-150">{{ $result['order_number'] }}</a>
            @endforeach
        </div>
    @endif
</div>
