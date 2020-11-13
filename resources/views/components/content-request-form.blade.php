@php
 $content_type_options = [
     'Image',
     'Video',
     'Blog Post',
     'Text Post',
     'Poll',
 ];
 $campaign_options = [
     'campaign_1',
     'campaign_2',
     'campaign_3',
 ];
@endphp

<div class="pt-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h2 class="mx-2 mb-4 text-2xl">Content Request</h2>
        <div class="grid grid-cols-5 gap-4">
            <form action="">
                <div class="flex">
                    <div class="flex flex-col pr-8">
                        <label for="title"> Title
                            <input name="title" type="text">
                        </label>
                        <label for="description"> Description
                            <textarea name="description" id="" cols="30" rows="10"></textarea>
                        </label>
                    </div>
                    <div class="flex flex-col">
                        <label for="type">Content Type
                            <select name="type" id="">
                                @foreach($content_type_options as $opt)
                                    <option value="{{ $opt }}">{{ $opt }}</option>
                                @endforeach
                            </select>
                        </label>
                        <label for="campaign"> Campaign
                            <select name="campaign" id="">
                                @foreach($campaign_options as $opt)
                                    <option value="{{ $opt }}">{{ $opt }}</option>
                                @endforeach
                            </select>
                        </label>
                        <label for="recurring">Recurring
                            <input type="checkbox" name="" id="">
                        </label> Date Range
                        <label for="daterange">
                            <input type="datetime" name="daterange" id="">
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
