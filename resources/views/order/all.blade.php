<x-app-layout>
    <table class="min-w-full divide-y divide-gray-200 m-2">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Order Number
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Created At
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Last Updated At
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @forelse($orders as $order)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <a href="{{ route('order-details', ['id' => $order->id]) }}">{{ $order->order_number }}</a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $order->created_at->format('M d, Y \a\t g:i A') }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $order->updated_at->format('M d, Y \a\t g:i A') }}
                </td>
            </tr>
        @empty
            <tr>
                <span>There are no orders right now</span>
            </tr>
        @endforelse
        </tbody>
    </table>
    <div class="m-2">
        {{ $orders->links() }}
    </div>
</x-app-layout>
