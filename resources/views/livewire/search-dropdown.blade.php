<div class="flex items-center justify-center flex-1 px-2 lg:ml-6 lg:justify-end">
    <div class="w-full max-w-lg lg:max-w-xs">
        <label for="search" class="sr-only">Search for photos</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <input wire:model.debounce.300ms="search"
                id="search"
                class="block w-full py-2 pl-10 pr-3 leading-5 placeholder-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md focus:outline-none focus:placeholder-gray-400 focus:border-blue-300 focus:shadow-outline-blue sm:text-sm"
                placeholder="Search for photos..." type="search" autocomplete="off">
            @if (strlen($search) > 2)
                <div class="absolute z-50 grid w-full grid-cols-3 gap-1 p-2 mt-2 text-sm text-gray-700 bg-white border border-gray-300 divide-y divide-gray-200 rounded-md">
                    @forelse ($searchResults as $result)
                        <div>
                            <a href="#" class="flex items-center transition duration-150 ease-in-out hover:bg-gray-200">
                                <img src="{{ $result['urls']['thumb']  }}" alt="{{ $result['urls']['thumb'] }}" class="object-cover h-16">
                            </a>
                        </div>
                    @empty
                        <p class="px-4 py-4">No results found for "{{ $search }}"</p>
                    @endforelse
                </div>
            @endif
        </div>
    </div>
</div>
