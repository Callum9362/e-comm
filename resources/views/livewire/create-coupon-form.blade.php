<div class="grid place-items-center mt-2">
    <div class="w-1/2 bg-white rounded-lg shadow-lg px-6 py-4 mr-2">
        <h2 class="text-lg font-medium mb-4 text-center">Create Coupon</h2>
        <div class="flex flex-col gap-3">
            <form class="space-y-4" wire:submit.prevent="createCoupon">
                <div>
                    <label class="text-gray-500" >New Code</label>
                </div>
                <div>
                    <input type="text" name="code" wire:model="code" value="{{ old('code') }}" class="@error('code') border-red-500 @enderror w-3/4 info-input">
                </div>
                <div>
                    <label class="text-gray-500">Discount</label>
                </div>
                <div>
                    <input type="text" name="discount" wire:model="discount" value="{{ old('discount') }}" class="@error('discount') border-red-500 @enderror w-3/4  info-input">
                </div>
                <div>
                    <label class="text-gray-500">Type <small>(fixed or percent)</small></label>
                </div>
                <div>
                    <input type="text" name="type" wire:model="type" value="{{ old('type') }}" class="@error('type') border-red-500 @enderror w-3/4 info-input">
                </div>
                <div>
                    <label class="text-gray-500">Valid From:</label>
                </div>
                <div>
                    <input type="text" name="from" wire:model="from" value="{{ old('from') }}" class="@error('from') border-red-500 @enderror w-3/4 info-input">
                </div>
                <div>
                    <label class="text-gray-500">Valid Until:</label>
                </div>
                <div>
                    <input type="text" name="to" wire:model="to" value="{{ old('to') }}" class="@error('to') border-red-500 @enderror w-3/4 info-input">
                </div>
                <div>
                    <label class="text-gray-500">Usage Limit:</label>
                </div>
                <div>
                    <input type="text" name="limit" wire:model="limit" value="{{ old('limit') }}" class="@error('limit') border-red-500 @enderror w-3/4 info-input">
                </div>
                <button type="submit">Create</button>
            </form>
        </div>
    </div>
</div>
