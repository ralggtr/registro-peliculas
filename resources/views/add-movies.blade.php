<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Películas') }}
        </h2>
    </x-slot>

    <div class="my-8">
        <nav class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
                <div class="flex justify-between h-16">                    
                    <livewire:search-movies />
                    
                    
                </div>
            </div>
        </nav>
    </div>



</x-app-layout>
