<div class="flex flex-col justify-between p-4 overflow-hidden bg-white border-4 border-white shadow-lg items-between sm:rounded-lg">
    <img src="{{ $card->post_photo_path }}" class="w-full fit-cover"/>
    <h3 class="my-2 text-lg font-bold capitalize">{{ $card->title }}</h3>
    <em class="mb-2 text-gray-400 text-italic">
        <a href="#" class="hover:text-blue-600">#{{ $card->hashtags }}</a>
    </em>
    <p class="text-sm">{{$card->body }}<a href="#" class="hover:text-blue-600">...more</a></p>
    <a href="#" class="inline-flex items-center px-4 py-2 mt-8 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">Review</a>
</div>
