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
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @forelse ($campaigns as $campaign)
                    <div class="flex flex-col justify-between p-4 bg-white rounded-md shadow-md hover:shadow-lg">
                        <div>
                            <h3 class="px-4 mt-4 mb-2 -ml-4 text-lg font-normal capitalize border-l-4 border-yellow-500"><a href="{{ $campaign->path() }}">{{ str_limit($campaign->title, 60) }}</a></h3>
                            <p class="mb-4 text-sm italic text-gray-300 border-l-4 border-white">{{ $campaign->owner->name }}</p>
                            <p class="text-gray-400 border-l-4 border-white">{{ str_limit($campaign->description, 100) }}</p>
                        </div>
                        <a href="{{ route('view_campaign', $campaign->id) }}" class="self-start px-4 py-2 m-4 text-gray-500 border rounded-md border-grey-500 hover:bg-yellow-500 hover:text-white">View Campaign</a>
                    </div>
                @empty
                    <div class="w-full p-4 m-4 bg-white rounded shadow-lg">No Campaigns Yet.</div>
                @endforelse
            </div>
        </div>
    </div>

</x-app-layout>
