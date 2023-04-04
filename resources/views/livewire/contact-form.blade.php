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
        <h2 class="text-lg font-medium mb-4 text-center">Contact Us</h2>
        <div class="flex flex-col gap-3">
            <form class="space-y-4" wire:submit.prevent="submitContact">
                <div>
                    <label class="text-gray-500" >Name</label>
                </div>
                <div>
                    <input type="text" name="code" wire:model="name" value="{{ old('name') }}" class="@error('name') border-red-500 @enderror w-full form-input">
                    @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="text-gray-500">Email</label>
                </div>
                <div>
                    <input type="text" name="email" wire:model="email" value="{{ old('email') }}" class="@error('email') border-red-500 @enderror w-full form-input">
                    @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="text-gray-500">Phone</label>
                </div>
                <div>
                    <input type="text" name="phone" wire:model="phone" value="{{ old('phone') }}" class="@error('phone') border-red-500 @enderror w-full form-input">
                    @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="text-gray-500">Message</label>
                </div>
                <div>
                    <textarea  name="message" wire:model="message" value="{{ old('message') }}" class="@error('message') border-red-500 @enderror w-full form-input">
                    </textarea>
                    @error('message') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mx-auto">
                    <button class="submit-btn" type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
