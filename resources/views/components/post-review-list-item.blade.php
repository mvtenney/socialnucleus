<tr>
    <td class="ml-4 border-b"><img src="{{ $card->post_photo_path }}" class="w-20 rounded fit-cover"/></td>
    <td class="p-4 border-b"><h3 class="w-64 my-2 text-base font-bold capitalize">{{ $card->title }}</h3></td>
    <td class="p-4 border-b"><p class="block w-64 text-gray-400 text-italic"><a href="#" class="hover:text-blue-600">#{{ $card->hashtags }}</a></p></td>
    <td class="p-4 border-b"><p class="text-sm">{{ $card->body }}<a href="#" class="hover:text-blue-600">...more</a></p></td>
    <td class="p-4 mr-4 border-b"><a href="#" class="flex items-center px-4 py-2 m-auto text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">Review</a></td>
</tr>
