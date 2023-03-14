<x-app-layout>
    <table class="table">
        <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="table-heading">
                Coupon Number
            </th>
            <th scope="col" class="table-heading">
                Expired On
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
        @forelse($coupons as $coupon)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $coupon->code }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $coupon->end_date }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $coupon->created_at }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $coupon->updated_at }}
                </td>
            </tr>
        @empty
            <tr>
                <td class="text-center" colspan="3">
                    There are no expired coupons right now
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <div class="m-2">
        {{ $coupons->links() }}
    </div>
</x-app-layout>
