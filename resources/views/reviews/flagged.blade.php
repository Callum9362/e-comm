<x-app-layout>
    <table class="table">
        <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="table-heading">
                Title
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
        @forelse($reviews as $review)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <a href="{{ route('flagged-details', ['id' => $review->id]) }}">{{ $review->title }}</a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $review->created_at->format('M d, Y \a\t g:i A') }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $review->updated_at->format('M d, Y \a\t g:i A') }}
                </td>
            </tr>
        @empty
            <tr>
                <td class="text-center" colspan="3">
                    There are no reviews flagged right now
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <div class="m-2">
        {{ $reviews->links() }}
    </div>
</x-app-layout>
