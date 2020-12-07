<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="pt-24">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="grid grid-cols-4 gap-8">
                <div class="flex flex-col col-span-3">
                    <div class="flex flex-col">
                        <h2 class="mx-2 mb-4 text-2xl">Top Level Stats</h2>
                        <div class="grid grid-cols-3 gap-4 mb-12 ">
                            <a href="{{route('campaigns')}}" class="items-center justify-center card">
                                <h3 class="mt-4 leading-none tracking-wider text-center uppercase text-md">Campaigns</h3>
                                <p class="my-4 text-4xl">{{App\Models\Campaign::where('team_id', auth()->user()->currentTeam->id)->count()}}</p>
                            </a>
                            <a href="{{route('campaigns')}}" class="items-center justify-center card">
                                <h3 class="mt-4 leading-none tracking-wider text-center uppercase text-md">Pending Tasks</h3>
                                <p class="my-4 text-4xl">{{App\Models\CampaignTask::where('status', 'pending')->count()}}</p>
                            </a>
                            <a href="#" class="items-center justify-center card">
                                <h3 class="mt-4 leading-none tracking-wider text-center uppercase text-md">Posts not Published</h3>
                                <p class="my-4 text-4xl">{{App\Models\Post::where('team_id', auth()->user()->currentTeam->id)->whereNotIn('status', ['published'])->count()}}</p>
                            </a>
                            <a href="#" class="items-center justify-center card">
                                <h3 class="mt-4 leading-none tracking-wider text-center uppercase text-md">Published Posts</h3>
                                <p class="my-4 text-4xl">{{App\Models\Post::where('status', 'published')->where('team_id', auth()->user()->currentTeam->id)->count()}}</p>
                            </a>
                            <a href="#" class="items-center justify-center card">
                                <h3 class="mt-4 leading-none tracking-wider text-center uppercase text-md">Team Members</h3>
                                <p class="my-4 text-4xl">{{ Auth::user()->currentTeam->allUsers()->count()}}</p>
                            </a>
                        </div>

                        <h2 class="mx-2 mb-4 text-2xl">Create</h2>

                        <div class="grid grid-cols-4 gap-4">
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
                <div class="flex flex-col col-span-1">
                    <h2 class="mx-2 mb-4 text-2xl">Team Members</h2>
                    <div class="card">
                        @foreach (auth()->user()->currentTeam->allUsers() as $user)
                            <div class="flex items-center justify-start my-2">
                                <img class="h-12 mr-4 rounded-full" src="{{$user->profile_photo_url}}" alt="">
                                <div>
                                    <p class="text-semibold">{{$user->name}}</p>
                                    <p class="text-xs">{{ $user->teamRole(auth()->user()->currentTeam)->name }}</p>
                                </div>
                            </div>
                            @if(!$loop->last)
                            <hr>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>



        </div>
    </div>
</x-app-layout>
