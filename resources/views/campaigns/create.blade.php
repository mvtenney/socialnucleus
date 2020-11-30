<x-app-layout>
    <x-slot name="header">
       <div class="flex justify-between">
            <div class="breadcrumbs">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    <a href="{{route('campaigns')}}">{{ __('Campaigns') }}</a> > New Campaign
                </h2>
            </div>
            <div class="controls">
                <a href="{{route('campaigns')}}" class="px-4 py-2 font-semibold text-white bg-red-500 rounded-md shadow-md hover:shadow-none hover:bg-red-600">Cancel</a>
            </div>
       </div>
    </x-slot>


    <div class="pt-24">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h3 class="text-sm tracking-wide uppercase">Create A Campaign</h3>
            <p class="py-4 text-base">Campaigns allow you to organize your efforts into groups. This allows for better organization, prioritization, and statistical analysis.</p>
           <form method="POST" action="/campaigns" class="flex flex-col w-full mt-12">
                @csrf
                <input name="title" type="text" placeholder="Campaign Title" class="p-2 mb-8 rounded-md shadow-md text-md">
                <textarea name="description" id="description_field" cols="30" rows="10" class="p-2 mb-8 rounded-md shadow-md text-md" placeholder="Enter a Description for this campaign"></textarea>
                <div class="flex align-middle">
                    <button type="submit" class="block px-4 py-2 font-semibold text-white bg-yellow-500 rounded-md shadow-md hover:shadow-none hover:bg-yellow-600">Submit</button>
                    <a href="{{route('campaigns')}}" class="block px-4 py-2 text-red-500 hover:text-red-600">cancel</a>
                </div>
           </form>
        </div>
    </div>

</x-app-layout>
