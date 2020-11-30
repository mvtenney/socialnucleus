<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="breadcrumbs">
                <h2 class="block text-sm font-semibold leading-none text-gray-800">
                    <a href="{{route('campaigns')}}">{{ __('Campaigns') }}</a> > <a href="{{route('view_campaign', $campaign)}}">{{$campaign->title}}</a> > <a href="{{route('view_tasks', $campaign)}}">{{ __('Tasks') }}</a> > {{ $task->title }}
                </h2>
            </div>
            <div class="controls">
                <a href="{{route('create_task', $campaign)}}" class="block yellow-btn">Create New Task</a>
            </div>
       </div>
    </x-slot>

    <div class="pt-12">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 gap-8 md:grid-cols-4">
                <div class="flex flex-col col-span-1 px-4 mb-6 md:col-span-2 lg:col-span-3">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="px-4 text-xl font-normal capitalize"><a href="{{ $task->path() }}">{{ str_limit($task->title, 60) }}</a></h3>
                        <a href="{{route('create_task', $campaign)}}" class="block green-btn">Save Changes</a>
                    </div>
                    <textarea class="h-auto min-h-full text-gray-400 resize-y card">{{ str_limit($task->body, 100) }}</textarea>
                </div>
                <div class="flex flex-col justify-between col-span-1 px-4 mb-6 bg-white rounded-md shadow-md hover:shadow-lg md:col-span-2 lg:col-span-1">
                    <div>
                        <h3 class="section-heading">Assigned To</h3>
                        <div class="flex items-center justify-start mb-4">
                            <button class="flex mr-6 text-sm transition duration-150 ease-in-out border-2 border-black rounded-full hover:border-yellow-500">
                                <img class="object-cover w-8 h-8 rounded-full" src="{{ $assigned_user->profile_photo_url }}" alt="{{ $assigned_user->name }}" />
                            </button>
                            <p class="text-sm text-gray-500 border-white ">{{ $assigned_user->name }}</p>
                        </div>

                        <hr>

                        <h3 class="section-heading">Created By</h3>
                        <div class="flex items-center justify-start mb-4">
                            <button class="flex mr-6 text-sm transition duration-150 ease-in-out border-2 border-black rounded-full hover:border-yellow-500">
                                <img class="object-cover w-8 h-8 rounded-full" src="{{ $task->owner->profile_photo_url }}" alt="{{ $task->owner->name }}" />
                            </button>
                            <p class="text-sm text-gray-500 border-white ">{{ $task->owner->name }}</p>
                        </div>
                        <hr>

                        <h3 class="section-heading">Created</h3>
                        <p class="mb-4 text-sm text-gray-500 border-white">{{ $task->created_at->diffForHumans() }}</p>

                        <hr>

                        <h3 class="section-heading">Last Updated</h3>
                        <p class="mb-4 text-sm text-gray-500 border-white">{{ $task->updated_at->diffForHumans()}}</p>

                        <hr>

                        <h3 class="section-heading">Type</h3>
                        <p class="mb-4 text-sm text-gray-500 border-white">{{ $task->getType() }}</p>

                        <hr>

                        <h3 class="section-heading">Status</h3>
                        <p class="mb-4 text-sm text-gray-500 border-white ">{{ $task->status }}</p>

                        <hr>

                        <h3 class="section-heading">Priority</h3>
                        <p class="mb-4 text-sm border-white text-{{ $task->getPriority()->color }}">{{ $task->getPriority()->title }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
