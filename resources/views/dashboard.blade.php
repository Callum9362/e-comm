<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="m-2">Latest Orders</h3>
                    <livewire:latest-orders-component></livewire:latest-orders-component>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
