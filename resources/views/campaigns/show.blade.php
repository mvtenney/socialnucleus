<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div class="breadcrumbs">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    <a href="{{route('campaigns')}}">{{ __('Campaigns') }}</a> > {{$campaign->title}}
                </h2>
            </div>
            <div class="controls">
                <a href="{{route('requests')}}" class="px-4 py-2 font-semibold text-white bg-yellow-500 rounded-md shadow-md hover:shadow-none hover:bg-yellow-600">Create Request</a>
            </div>
       </div>
    </x-slot>


    <div class="pt-24">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <p>{{$campaign->description}}</p>
        </div>
    </div>

</x-app-layout>
