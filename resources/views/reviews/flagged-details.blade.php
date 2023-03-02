<x-app-layout>
    <div class="p-6 bg-white rounded-lg shadow-md m-2">
        <div class="float-right">
            <livewire:remove-review-flag-link
                :reviewID="$review->id"
            />
        </div>
        <div class="font-medium text-lg mb-2">Review #{{ $review->id }}</div>
        <div class="text-gray-600 text-sm">Created on {{ $review->created_at->format('M d, Y \a\t g:i A') }}</div>
        <div class="text-gray-600 text-sm">Updated on {{ $review->updated_at->format('M d, Y \a\t g:i A') }}</div>
        <div class="text-gray-600 text-sm m-2">{{ $review->title }}</div>
        <div class="text-gray-600 text-sm m-2">{{ $review->description }}</div>
    </div>
</x-app-layout>
