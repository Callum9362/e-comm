<div>
    @if ($success)
        <div class="mx-auto bg-green-500 p-4 rounded-md text-white shadow-md mb-3 text-center" role="alert">
            <div>
                {{ $success }}
                <button class="ml-2 text-white" wire:click="$set('success', null)">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    @endif
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
            <th scope="col" class="table-heading">
                Undo
            </th>
        </tr>
        </thead>
        <tbody class="table-body">
        @forelse($orders as $order)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $order->order_number }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $order->created_at->format('M d, Y \a\t g:i A') }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $order->updated_at->format('M d, Y \a\t g:i A') }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <i class="fas fa-undo" wire:click="restore({{ $order->id }})"></i>
                </td>
            </tr>
        @empty
            <tr>
                <td class="text-center" colspan="4">
                    There are no cancelled orders right now
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
