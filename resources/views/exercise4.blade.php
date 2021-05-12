<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ejercicio #4 - - -') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-15">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <livewire:exercise4 />
            </div>
        </div>
    </div>
</x-app-layout>
