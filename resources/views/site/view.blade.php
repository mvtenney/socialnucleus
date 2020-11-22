@extends('layouts.site')
@section('header')
<header class="flex flex-col items-center justify-center w-full h-screen py-24">
    <div class="grid items-center grid-cols-2 mx-auto my-auto max-w-7xl header-content">
        <h1 class="relative -mr-12 deco z-1"><span class="block m-auto ml-0 text-left text-7xl">content that</span> <span class="block m-auto mr-0 text-right text-8xl">builds demand</span></h1>
        <img src="" alt="" class="bg-gray-400 h-96">
    </div>
</header>
@endsection

@section('body')

<div class="grid items-center grid-cols-1 mx-auto my-auto max-w-7xl header-content">
    <h2 class="pt-24 text-3xl deco">What We Do</h2>
    <ul class="pb-24 border-b">
        <li class="text-lg">Monthly Content to promote course or membership program</li>
        <li class="text-lg">Repurpose long for longform blogposts or podcasts into microcontent suited for social media</li>
        <li class="text-lg">Customized Templates</li>
        <li class="text-lg">Video and still image creation</li>
    </ul>

    <h2 class="pt-24 text-3xl deco">Why Outsource Content Production</h2>
    <ul class="pb-24 border-b">
        <li class="text-lg">Scale your business</li>
        <li class="text-lg">Spend more time engaging</li>
        <li class="text-lg">Efficient process</li>
    </ul>

    <h2 class="pt-24 text-3xl deco">Why Repurposing Works</h2>
    <ul class="pb-24 border-b">
        <li class="text-lg">It builds traffic to your website</li>
        <li class="text-lg">Target new market segments</li>
        <li class="text-lg">Save money on ad budget by using organic social traffic</li>
        <li class="text-lg">Message Reinforcement</li>
        <li class="text-lg">People engage in different ways</li>
        <li class="text-lg">The Rule of Seven</li>
    </ul>

    <h2 class="pt-24 text-3xl deco">See The Difference</h2>
    <p class="w-full pb-24 border-b text-md">Show example here of longform content turning into microcontent</p>

    <h2 class="pt-24 text-3xl deco">Platform/Service Benefits</h2>
    <ul class="w-full pb-24 border-b">
        <li class="text-xl">Multiply Your Effort</li>
        <li class="text-xl">Consistent Messaging</li>
        <li class="text-xl">Faster Results</li>
        <li class="text-xl">Unified Platform</li>
        <li class="text-xl">Monthly Reports</li>
        <li class="text-xl">Editorial Calendar</li>
    </ul>

    <h2 class="py-24 text-3xl border-b deco">Lead Magnet PDF (content creation checklist)</h2>


    <h2 class="pt-24 text-3xl deco">Testimonials</h2>
    <ul class="w-full pb-24">
        <li class="text-xl">Serena Ryan</li>
        <li class="text-xl">Mira Britman</li>
        <li class="text-xl">Paul Hittner</li>
    </ul>
</div>
@endsection
