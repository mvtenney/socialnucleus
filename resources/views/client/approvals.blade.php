<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Approvals') }}
        </h2>
    </x-slot>

    <div class="pt-24">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2 class="mx-2 mb-4 text-2xl">Review</h2>
            @php
             $posts = DB::table('posts')->where('post_status', 'pending')->get();
            @endphp
            {{-- <div class="grid grid-cols-4 gap-4 mb-12">
                @foreach($posts as $card)
                    <x-post-review-card :card=$card />
                @endforeach
            </div> --}}
            <div class="p-4 bg-white border-4 border-white rounded-lg shadow-lg">
                <table class="table-fixed">
                    <thead>
                        <tr>
                            <th class="py-4 text-left bg-gray-400"></th>
                            <th class="py-4 text-left bg-gray-400">Title</th>
                            <th class="py-4 text-left bg-gray-400">Platforms</th>
                            <th class="py-4 text-left bg-gray-400">Post</th>
                            <th class="py-4 text-left bg-gray-400">Review</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $card)
                            <x-post-review-list-item :card=$card />
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
