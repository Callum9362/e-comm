<div class="grid place-items-center mt-2">
    @if ($success)
        <div class="success-alert" role="alert">
            <div>
                {{ $success }}
                <button class="ml-2 text-white" wire:click="$set('success', null)">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    @endif
    <div class="w-1/2 bg-white rounded-lg shadow-lg px-6 py-4 mr-2">
        <h2 class="text-lg font-medium mb-4 text-center">Create Coupon</h2>
        <div class="flex flex-col gap-3">
            <form class="space-y-4" wire:submit.prevent="createCoupon">
                <div>
                    <label class="text-gray-500" >New Code</label>
                </div>
                <div>
                    <input type="text" name="code" wire:model="code" value="{{ old('code') }}" class="@error('code') border-red-500 @enderror w-full form-input">
                    @error('code') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="text-gray-500">Discount</label>
                </div>
                <div>
                    <input type="text" name="discount" wire:model="discount" value="{{ old('discount') }}" class="@error('discount') border-red-500 @enderror w-full form-input">
                    @error('discount') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="text-gray-500">Type <small>(fixed or percent)</small></label>
                </div>
                <div>
                    <input type="text" name="type" wire:model="type" value="{{ old('type') }}" class="@error('type') border-red-500 @enderror w-full form-input">
                    @error('type') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="text-gray-500">Valid From</label>
                </div>
                <div>
                    <input  type="datetime-local" name="from" wire:model="from" value="{{ old('from') }}" class="@error('from') border-red-500 @enderror w-full form-input">
                    @error('from') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="text-gray-500">Valid Until</label>
                </div>
                <div>
                    <input type="datetime-local" name="to" wire:model="to" value="{{ old('to') }}" class="@error('to') border-red-500 @enderror w-full form-input">
                    @error('to') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="text-gray-500">Usage Limit</label>
                </div>
                <div>
                    <input type="text" name="limit" wire:model="limit" value="{{ old('limit') }}" class="@error('limit') border-red-500 @enderror w-full form-input">
                    @error('limit') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mx-auto">
                    <button class="submit-btn" type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
