<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Template Dashboard') }}
        </h2>
    </x-slot>

    <div>
        <div class="pt-24">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h2 class="mx-2 mb-4 text-2xl">Create Template for</h2>
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
                        <i class="p-4 text-gray-500 far fa-envelope fa-3x"></i>
                        <p class="p-4 text-lg font-bold text-gray-600">Email</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{-- <h2 class="mx-2 mb-4 text-2xl">Top 5 Templates</h2> Query top 5 templates from top performing posts--}}
            {{-- <h2 class="mx-2 mb-4 text-2xl">Most Used Templates</h2> Query num of post by distinct template --}}
            {{-- Create Template List Functionality --}}
            <h2 class="mx-2 mb-4 text-2xl">Team Templates</h2>
            <div class="grid grid-cols-5 gap-2">
                <div class="h-48 bg-red-300 template-card"></div>
                <div class="h-48 bg-red-300 template-card"></div>
                <div class="h-48 bg-red-300 template-card"></div>
                <div class="h-48 bg-red-300 template-card"></div>
                <div class="h-48 bg-red-300 template-card"></div>
                <div class="h-48 bg-red-300 template-card"></div>
                <div class="h-48 bg-red-300 template-card"></div>
                <div class="h-48 bg-red-300 template-card"></div>
                <div class="h-48 bg-red-300 template-card"></div>
                <div class="h-48 bg-red-300 template-card"></div>
            </div>
        </div>
    </div>
</x-app-layout>
