<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div class="breadcrumbs">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    {{ __('Campaigns') }}
                </h2>
            </div>
            <div class="controls">
                <a href="{{route('create_campaign')}}" class="yellow-btn">Create Campaign</a>
            </div>
       </div>
    </x-slot>


    <div class="pt-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">
                @forelse ($campaigns as $campaign)
                    <a href="{{ $campaign->path() }}" class="flex flex-col justify-between p-4 bg-white rounded-md shadow-md hover:shadow-lg">
                        <h3 class="px-4 mt-4 mb-2 -ml-4 text-lg font-normal capitalize border-l-4 border-blue-500">{{ str_limit($campaign->title, 60) }}</h3>
                        <p class="text-gray-400 border-l-4 border-white">{{ str_limit($campaign->description, 100) }}</p>
                        <button class="flex self-end text-sm transition duration-150 ease-in-out border-2 rounded-full shadow-sm  border-grey-200 focus:outline-none hover:border-yellow-500">
                            <img class="object-cover w-8 h-8 rounded-full" src="{{ $campaign->owner->profile_photo_url }}" alt="{{ $campaign->owner->name }}" />
                        </button>
                    </a>
                @empty
                    <div class="w-full p-4 m-4 bg-white rounded shadow-lg">No Campaigns Yet.</div>
                @endforelse
            </div>
        </div>
    </div>

</x-app-layout>
