<x-app-layout>
    <table class="min-w-full divide-y divide-gray-200 m-2">
        <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Title
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
