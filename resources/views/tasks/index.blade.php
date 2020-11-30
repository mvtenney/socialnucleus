<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div class="breadcrumbs">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    <a href="{{route('campaigns')}}">{{ __('Campaigns') }}</a> > <a href="{{$campaign->path()}}">{{$campaign->title}}</a> > Tasks
                </h2>
            </div>
            <div class="controls">
                <a href="{{route('create_task', $campaign)}}" class="yellow-btn">Create Task</a>
            </div>
       </div>
    </x-slot>


    <div class="pt-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

                @forelse ($campaign->tasks as $task)
                    <div class="flex flex-col justify-between p-4 bg-white rounded-md shadow-md hover:shadow-lg">
                        <div>
                            <h3 class="px-4 mt-4 mb-2 -ml-4 text-lg font-normal capitalize border-l-4 border-yellow-500"><a href="{{ $task->path() }}">{{ str_limit($task->title, 60) }}</a></h3>
                            <p class="mb-4 text-sm italic text-gray-300 border-l-4 border-white">{{ $task->owner->name }}</p>
                            <p class="text-gray-400 border-l-4 border-white">{{ str_limit($task->body, 100) }}</p>
                        </div>
                        <div class="mt-6 mb-4 border-l-4 border-transparent">
                            <a href="{{ $task->path() }}" class="self-start px-4 py-2 my-4 text-gray-500 border rounded-md border-grey-500 hover:bg-yellow-500 hover:text-white">View Task</a>
                        </div>
                    </div>
                @empty
                    <div class="w-full p-4 m-4 bg-white rounded shadow-lg">No Tasks Yet.</div>
                @endforelse
            </div>
        </div>
    </div>

</x-app-layout>
