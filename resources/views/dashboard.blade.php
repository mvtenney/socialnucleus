<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-24">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2 class="mx-2 mb-4 text-2xl">Create</h2>
            {{-- <x-jet-welcome /> --}}
            <div class="grid grid-cols-5 gap-4">
                <a href="#" class="flex items-center overflow-hidden bg-white border-4 border-white shadow-lg hover:shadow-inner hover:border-gray-400 sm:rounded-lg">
                    <i class="p-4 text-gray-500 fas fa-portrait fa-3x"></i>
                    <p class="p-4 text-lg font-bold text-gray-600">Image Post</p>
                </a>
                <a href="#" class="flex items-center overflow-hidden bg-white border-4 border-white shadow-lg hover:shadow-inner hover:border-gray-400 sm:rounded-lg">
                    <i class="p-4 text-gray-500 fas fa-film fa-3x"></i>
                    <p class="p-4 text-lg font-bold text-gray-600">Video Post</p>
                </a>
                <a href="#" class="flex items-center overflow-hidden bg-white border-4 border-white shadow-lg hover:shadow-inner hover:border-gray-400 sm:rounded-lg">
                    <i class="p-4 text-gray-500 fas fa-microphone-alt fa-3x"></i>
                    <p class="p-4 text-lg font-bold text-gray-600">Audiogram</p>
                </a>
                <a href="#" class="flex items-center overflow-hidden bg-white border-4 border-white shadow-lg hover:shadow-inner hover:border-gray-400 sm:rounded-lg">
                    <i class="p-4 text-gray-500 fas fa-layer-group fa-3x"></i>
                    <p class="p-4 text-lg font-bold text-gray-600">Template</p>
                </a>
                <a href="#" class="flex items-center overflow-hidden bg-white border-4 border-white shadow-lg hover:shadow-inner hover:border-gray-400 sm:rounded-lg">
                    <i class="p-4 text-gray-500 fas fa-chart-bar fa-3x"></i>
                    <p class="p-4 text-lg font-bold text-gray-600">Poll</p>
                </a>
                <a href="#" class="flex items-center overflow-hidden bg-white border-4 border-white shadow-lg hover:shadow-inner hover:border-gray-400 sm:rounded-lg">
                    <i class="p-4 text-gray-500 far fa-envelope fa-3x"></i>
                    <p class="p-4 text-lg font-bold text-gray-600">Email</p>
                </a>
                <a href="#" class="flex items-center overflow-hidden bg-white border-4 border-white shadow-lg hover:shadow-inner hover:border-gray-400 sm:rounded-lg">
                    <i class="p-4 text-gray-500 fas fa-laugh fa-3x"></i>
                    <p class="p-4 text-lg font-bold text-gray-600">GIF</p>
                </a>
            </div>
        </div>
    </div>
    <x-content-request-form />
</x-app-layout>
