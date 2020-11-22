<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Single Content Requests') }}
        </h2>
    </x-slot>

    <div class="pt-24">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{-- <x-jet-welcome /> --}}
            <div class="grid grid-cols-3 gap-4">
                <a href="#" class="flex items-center overflow-hidden bg-white border-4 border-white shadow-md hover:shadow-inner hover:border-gray-400 sm:rounded-lg">
                    <i class="p-4 text-gray-500 fas fa-portrait fa-3x"></i>
                    <p class="p-4 text-lg font-bold text-gray-600">Animated Logo ($125)</p>
                </a>
                <a href="#" class="flex items-center overflow-hidden bg-white border-4 border-white shadow-md hover:shadow-inner hover:border-gray-400 sm:rounded-lg">
                    <i class="p-4 text-gray-500 fas fa-film fa-3x"></i>
                    <p class="p-4 text-lg font-bold text-gray-600">Social Media Copy ($179)</p>
                </a>
                <a href="#" class="flex items-center overflow-hidden bg-white border-4 border-white shadow-md hover:shadow-inner hover:border-gray-400 sm:rounded-lg">
                    <i class="p-4 text-gray-500 fas fa-microphone-alt fa-3x"></i>
                    <p class="p-4 text-lg font-bold text-gray-600">SEO Blog Post ($125)</p>
                </a>
                <a href="#" class="flex items-center overflow-hidden bg-white border-4 border-white shadow-md hover:shadow-inner hover:border-gray-400 sm:rounded-lg">
                    <i class="p-4 text-gray-500 fas fa-layer-group fa-3x"></i>
                    <p class="p-4 text-lg font-bold text-gray-600">60-second Video ($75)</p>
                </a>
                <a href="#" class="flex items-center overflow-hidden bg-white border-4 border-white shadow-md hover:shadow-inner hover:border-gray-400 sm:rounded-lg">
                    <i class="p-4 text-gray-500 fas fa-chart-bar fa-3x"></i>
                    <p class="p-4 text-lg font-bold text-gray-600">Edited Podcast Episode ($250)</p>
                </a>
                <a href="#" class="flex items-center overflow-hidden bg-white border-4 border-white shadow-md hover:shadow-inner hover:border-gray-400 sm:rounded-lg">
                    <i class="p-4 text-gray-500 far fa-envelope fa-3x"></i>
                    <p class="p-4 text-lg font-bold text-gray-600">Youtube Video Editing ($120)</p>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
