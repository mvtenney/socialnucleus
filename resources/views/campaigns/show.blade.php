<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div class="breadcrumbs">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    <a href="{{route('campaigns')}}">{{ __('Campaigns') }}</a> > {{$campaign->title}}
                </h2>
            </div>
            <div class="controls">
                <a href="{{route('requests')}}" class="yellow-btn">Create Request</a>
            </div>
       </div>
    </x-slot>

    <div class="pt-12">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 gap-8 md:grid-cols-4">
                <div class="col-span-1 md:col-span-2 lg:col-span-3">
                    <div class="flex flex-col mb-6">
                        <h3 class="section-heading">Tasks</h3>
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                            @forelse ($campaign->tasks as $task)
                                <a href="{{ route('view_task', $task) }}" class="card">
                                    <h3 class="px-4 mb-2 -ml-4 text-lg font-normal capitalize border-l-4 border-yellow-500">{{ str_limit($task->title, 60) }}</h3>
                                    <p class="text-gray-400 border-l-4 border-white">{{ str_limit($task->body, 100) }}</p>
                                    <button class="flex self-end mt-2 text-sm transition duration-150 ease-in-out border-2 rounded-full shadow-sm border-grey-200focus:outline-none hover:border-yellow-500">
                                        <img class="object-cover w-8 h-8 rounded-full" src="{{ $task->owner->profile_photo_url }}" alt="{{ $task->owner->name }}" />
                                    </button>
                                </a>
                            @empty
                                <div class="w-full p-4 m-4 bg-white rounded shadow-lg">No Tasks Yet.</div>
                            @endforelse
                        </div>
                    </div>
                    <div class="flex flex-col mb-6">
                        <h3 class="section-heading">Published Posts</h3>
                        <div class="grid grid-cols-4 gap-6">
                            @forelse ($campaign->posts()->where('status', 'published')->get() as $post)
                                <div class="justify-start col-span-4 card no-pad md:col-span-2 lg:col-span-1">
                                    <img src="{{$post->photo_path}}" alt="" class="w-full rounded-t-md">
                                    <div class="flex flex-col justify-between h-full p-4">
                                        <h2 class="mb-4 capitalize">{{$post->title}}</h2>
                                        <p class="text-sm">
                                            {{str_limit($post->description, 60)}}
                                        </p>
                                        <button class="flex self-end mt-2 text-sm transition duration-150 ease-in-out border-2 rounded-full shadow-sm border-grey-200focus:outline-none hover:border-yellow-500">
                                            <img class="object-cover w-8 h-8 rounded-full" src="{{ $post->owner->profile_photo_url }}" alt="{{ $post->owner->name }}" />
                                        </button>
                                    </div>
                                </div>
                            @empty
                                <div class="col-span-4">
                                    <div class="card">
                                        <p>There are no published posts</p>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="flex flex-col mb-6">
                        <h3 class="section-heading">Pending Posts</h3>
                        <div class="grid grid-cols-4 gap-6">
                            @forelse ($campaign->posts()->where('status', 'draft')->get() as $post)
                                <div class="justify-start col-span-4 card no-pad md:col-span-2 lg:col-span-1">
                                    <img src="{{$post->photo_path}}" alt="" class="w-full rounded-t-md">
                                    <div class="flex flex-col justify-between h-full p-4">
                                        <h2 class="mb-4 capitalize">{{$post->title}}</h2>
                                        <p class="text-sm">
                                            {{str_limit($post->description, 60)}}
                                        </p>
                                        <button class="flex self-end mt-2 text-sm transition duration-150 ease-in-out border-2 rounded-full shadow-sm border-grey-200focus:outline-none hover:border-yellow-500">
                                            <img class="object-cover w-8 h-8 rounded-full" src="{{ $post->owner->profile_photo_url }}" alt="{{ $post->owner->name }}" />
                                        </button>
                                    </div>
                                </div>
                            @empty
                            <div class="col-span-4">
                                <div class="card">
                                    <p>There are no posts in draft</p>
                                </div>
                            </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="flex flex-col mb-6">
                        <h3 class="section-heading">Campaign Notes</h3>
                        <textarea class="w-full mb-6 card h-96" placeholder="Enter some notes in markdown!"></textarea>
                        <a href="{{route('requests')}}" class="self-end yellow-btn">Add Note</a>
                    </div>
                </div>

                <div class="flex flex-col col-span-1 mb-6 md:col-span-2 lg:col-span-1">
                    <h3 class="section-heading">Description</h3>
                    <div class="card">
                        <h3 class="px-4 mt-4 mb-2 -ml-4 text-lg font-normal capitalize border-l-4 border-yellow-500"><a href="{{ $campaign->path() }}">{{ $campaign->title }}</a></h3>
                        <p class="mb-4 text-sm italic text-gray-300 border-l-4 border-white">{{ $campaign->owner->name }}</p>
                        <p class="text-gray-400 border-l-4 border-white">{{ $campaign->description }}</p>
                        <a href="{{route('campaigns')}}" class="block py-2 text-yellow-500 border-l-4 border-white hover:text-yellow-600">go back</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
