<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div class="breadcrumbs">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    {{ __('Campaigns') }}
                </h2>
            </div>
            <div class="controls">
                <a href="{{route('create_campaign')}}" class="px-4 py-2 font-semibold text-white bg-yellow-500 rounded-md shadow-md hover:shadow-none hover:bg-yellow-600">Create Campaign</a>
            </div>
       </div>
    </x-slot>


    <div class="pt-24">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 gap-4">
                @forelse ($campaigns as $campaign)
                    <div class="flex flex-col justify-start p-4 bg-white border border-gray-300 rounded-md b-2 hover:shadow-md hover:border-yellow-500">
                        <h3 class="mb-6 font-bold capitalize text-md"><a href="{{ $campaign->path() }}">{{ $campaign->title }}</a></h3>
                        <p>{{ $campaign->description }}</p>
                    </div>
                @empty
                    <div class="w-full p-4 bg-white rounded shadow-lg">No Projects Yet.</div>
                @endforelse
            </div>
        </div>
    </div>

</x-app-layout>
