<x-app-layout>
    <table class="table">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="table-heading">
                    Order Number
                </th>
                <th scope="col" class="table-heading">
                    Created At
                </th>
                <th scope="col" class="table-heading">
                    Last Updated At
                </th>
            </tr>
        </thead>
        <tbody class="table-body">
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
                <td class="text-center" colspan="3">
                    There are no orders right now
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <div class="m-2">
        {{ $orders->links() }}
    </div>
</x-app-layout>
