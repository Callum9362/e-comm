<x-app-layout>
    <div class="card">
        <div class="float-right">
            <livewire:remove-review-flag-link
                :reviewID="$review->id"
            />
        </div>
        <div class="font-medium text-lg mb-2">Review #{{ $review->id }}</div>
        <div class="text-gray-600 text-sm">
            <span>Created on {{ $review->created_at->format('M d, Y \a\t g:i A') }}</span>
            <span class="float-right">Updated on {{ $review->updated_at->format('M d, Y \a\t g:i A') }}</span>
        </div>
        <div class="text-sm mt-2">
         <span class="font-bold">Review Title:</span>   {{ $review->title }}
        </div>
        <div class="text-sm mt-2">
            <span class="font-bold">Review Body:</span>  {{ $review->description }}
        </div>
    </div>
</x-app-layout>
