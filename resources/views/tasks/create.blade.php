<x-app-layout>
    <x-slot name="header">
       <div class="flex justify-between">
            <div class="breadcrumbs">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    <a href="{{route('campaigns')}}">{{ __('Campaigns') }}</a> > <a href="{{route('view_campaign', $campaign)}}">{{$campaign->title}}</a> > <a href="{{route('tasks', $campaign)}}">{{ __('Tasks') }}</a> > New Task
                </h2>
            </div>
            <div class="controls">
                <a href="{{route('tasks', $campaign)}}" class="px-4 py-2 font-semibold text-white bg-red-500 rounded-md shadow-md hover:shadow-none hover:bg-red-600">Cancel</a>
            </div>
       </div>
    </x-slot>


    <div class="pt-24">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h3 class="section-heading">Create A Task</h3>
            <p class="py-4 text-base">Baby steps to the end of the campaign... BTW your death therapy cured me you genius!</p>
            <form method="POST" action="{{route('store_task', $campaign)}}" class="flex flex-col w-full mt-12">
                @csrf
                <input name="title" type="text" placeholder="Task Title" class="p-2 mb-8 rounded-md shadow-md text-md">

                <label for="type" class="section-heading">Type</label>
                <select name="type" id="type_field" class="p-2 mb-8 rounded-md shadow-md text-md">
                    <option value="content_request">Content Request</option>
                    <option value="brainstorm">Brainstorm</option>
                </select>

                <label for="status" class="section-heading">Status</label>
                <select name="status" id="status_field" class="p-2 mb-8 rounded-md shadow-md text-md">
                    <option value="backlog">Backlog</option>
                    <option value="pending">Pending</option>
                    <option value="current">In Progress</option>
                    <option value="completed">Completed</option>
                </select>

                <label for="priority" class="section-heading">Priority</label>
                <select name="priority" id="type_field" class="p-2 mb-8 rounded-md shadow-md text-md">
                    <option value="0">No Priority</option>
                    <option value="1">Low Priority</option>
                    <option value="2">Normal Priority</option>
                    <option value="3">High Priority</option>
                </select>

                <label for="assigned_to" class="section-heading">Assigned To</label>
                <select name="assigned_to" id="assigned_to_field" class="p-2 mb-8 rounded-md shadow-md text-md">
                    <option value="{{auth()->id()}}">{{auth()->user()->name}}</option>
                    @foreach (auth()->user()->currentTeam->users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>

                <label for="body" class="section-heading">Task Details</label>
                <textarea name="body" id="body_field" cols="30" rows="10" class="p-2 mb-8 rounded-md shadow-md text-md" placeholder="Enter Task Details"></textarea>

                <div class="flex align-middle">
                    <button type="submit" class="block px-4 py-2 font-semibold text-white bg-yellow-500 rounded-md shadow-md hover:shadow-none hover:bg-yellow-600">Submit</button>
                    <a href="{{route('tasks', $campaign)}}" class="block px-4 py-2 text-red-500 hover:text-red-600">cancel</a>
                </div>
           </form>
        </div>
    </div>

</x-app-layout>
