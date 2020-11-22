@extends('layouts.site')
@section('header')
@endsection

@section('body')
<div class="mx-auto my-auto max-w-7xl">
    <div class="flex items-center grid-cols-8 py-12 border-b border-gray-600 gap-x-8">
        <div class="">
            <h1 class="m-0 text-5xl tracking-wide deco">Content to support each phase of your growth starting at <span class="text-yellow-500">$179 a month</span></h1>
            <p class="text-sm">Includes a full approval and revisions process</p>
        </div>
        <a href="/signup" class="block px-8 py-4 mt-4 text-center text-white uppercase bg-yellow-500 rounded-sm text-md btn w-96 text-bold hover:shadow-inset hover:shadow-lg">Get roaring today!</a>
    </div>
    <div class="grid items-center grid-cols-5 py-12 border-b border-gray-600">
        <div class="col-span-2">
            <h3 class="text-2xl tracking-widest text-yellow-500 uppercase deco">Getting Started</h3>
            <h2 class="text-5xl deco">All Packages Include</h2>
            <p>some descriptive text about all packages</p>
        </div>
        <div class="grid items-center grid-cols-2 col-span-3 gap-x-8" >
            <div class="grid items-center justify-start grid-cols-8 py-4 text-left border-b border-gray-300 gap-x-8">
                <x-icons.check class="block w-12 h-8 col-span-2 text-green-500" />
                <p class="block col-span-6">4 content sets every month</p>
            </div>
            <div class="grid items-center justify-start grid-cols-8 py-4 text-left border-b border-gray-300 gap-x-8">
                <x-icons.check class="block w-12 h-8 col-span-2 text-green-500"/>
                <p class="block col-span-6">Template Gallery Access</p>
            </div>
            <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                <x-icons.check class="block w-12 h-8 col-span-2 text-green-500"/>
                <p class="block col-span-6">Full revision process</p>
            </div>
            <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                <x-icons.check class="block w-12 h-8 col-span-2 text-green-500"/>
                <p class="block col-span-6">Assets delivered in 3 aspect ratios (Square, Portrait & Landscape)</p>
            </div>
        </div>
    </div>
    <div class="grid items-center grid-cols-5 py-12 border-b border-gray-600">
        <div class="col-span-2 ">
            <h3 class="text-2xl tracking-widest text-yellow-500 uppercase deco">Take a breath</h3>
            <h2 class="text-5xl deco">Add-On Services</h2>
            <p>some descriptive text about addons</p>
        </div>

        <div class="flex flex-col items-start justify-between col-span-3 gap-8">
            <div class="grid items-center grid-cols-2 gap-x-8" >
                <h3 class="block col-span-2 py-4 text-lg tracking-widest text-left uppercase border-b border-gray-300 deco">Content Scheduling  + Publishing</h3>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500" />
                    <p class="block col-span-6">Post to All Platforms - Youtube, IGTV, Reels, Stories, LinkedIn, Facebook, Twitter, Pinterest</p>
                </div>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500"/>
                    <p class="block col-span-6">Approval Workflow</p>
                </div>
            </div>
            {{-- <div class="self-center w-0.5 h-48 bg-gray-300"></div> --}}
            <div class="grid items-center grid-cols-1 gap-x-8" >
                <h3 class="block col-span-2 py-4 text-lg tracking-widest text-left uppercase border-b border-gray-300 deco">Content Repurposing Strategy</h3>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-1 text-green-500"/>
                    <p class="block col-span-7">We will go through your content for you and create long form content - ebooks, lead magnets, email sequence</p>
                </div>
            </div>
        </div>
    </div>
    <div class="grid items-center grid-cols-5 py-12 border-b border-gray-600">
        <div class="col-span-2">
            <h3 class="text-2xl tracking-widest text-yellow-500 uppercase deco">Need Something Quick?</h3>
            <h2 class="text-5xl deco">Single Content Request</h2>
            <p>some descriptive text about requests</p>
        </div>
        <div class="grid items-center grid-cols-2 col-span-3 gap-x-8" >
            <div class="grid items-center justify-start grid-cols-8 py-4 text-left border-b border-gray-300 gap-x-8">
                <span class="block col-span-2 text-xl text-green-500">$175</span>
                <p class="block col-span-6">Animated Logo </p>
            </div>
            <div class="grid items-center justify-start grid-cols-8 py-4 text-left border-b border-gray-300 gap-x-8">
                <span class="block col-span-2 text-xl text-green-500">$125</span>
                <p class="block col-span-6">SEO Blog Post</p>
            </div>
            <div class="grid items-center justify-start grid-cols-8 py-4 text-left border-b border-gray-300 gap-x-8">
                <span class="block col-span-2 text-xl text-green-500">$250</span>
                <p class="block col-span-6">Edited Podcast Episode</p>
            </div>
            <div class="grid items-center justify-start grid-cols-8 py-4 text-left border-b border-gray-300 gap-x-8">
                <span class="block col-span-2 text-xl text-green-500">$179</span>
                <p class="block col-span-6">Social Media Copy</p>
            </div>
            <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                <span class="block col-span-2 text-xl text-green-500">$75</span>
                <p class="block col-span-6">60-second Video</p>
            </div>
            <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                <span class="block col-span-2 text-xl text-green-500">$120</span>
                <p class="block col-span-6">YouTube Video Editing</p>
            </div>
        </div>
    </div>
    <div class="grid items-center grid-cols-5 py-12 border-b border-gray-600">
        <div class="col-span-2 ">
            <h3 class="text-2xl tracking-widest text-yellow-500 uppercase deco">Save Money</h3>
            <h2 class="text-5xl deco">Content Subscription Box</h2>
            <p>some descriptive text about subscriptions</p>
        </div>

        <div class="flex flex-col items-start justify-between col-span-3 gap-8">
            <div class="grid items-center grid-cols-2 gap-x-8" >
                <div class="grid items-center justify-start grid-cols-8 col-span-2 py-4 text-left border-b border-gray-300">
                    <span class="block col-span-1 text-xl text-green-500">$179</span>
                    <h3 class="block col-span-6 py-4 text-lg tracking-widest text-left uppercase deco">Classical Starter Package</h3>
                </div>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500"/>
                    <p class="block col-span-6">4 content sets every month</p>
                </div>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500"/>
                    <p class="block col-span-6">Template Gallery Access</p>
                </div>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500" />
                    <p class="block col-span-6">Full revision process</p>
                </div>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500"/>
                    <p class="block col-span-6">Delivered Monthly</p>
                </div>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500"/>
                    <p class="block col-span-6">Assets delivered in 3 aspect ratios (Square, Portrait & Landscape)</p>
                </div>
            </div>
            <div class="grid items-center grid-cols-2 gap-x-8" >
                <div class="grid items-center justify-start grid-cols-8 col-span-2 py-4 text-left border-b border-gray-300">
                    <span class="block col-span-1 text-xl text-green-500">$397</span>
                    <h3 class="block col-span-6 py-4 text-lg tracking-widest text-left uppercase deco">All That Jazz Package</h3>
                </div>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500"/>
                    <p class="block col-span-6">Everything in the Classical Starter Package</p>
                </div>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500"/>
                    <p class="block col-span-6">12 content sets every month</p>
                </div>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500" />
                    <p class="block col-span-6">Monthly Editorial Calendar</p>
                </div>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500"/>
                    <p class="block col-span-6">Custom Graphics</p>
                </div>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500"/>
                    <p class="block col-span-6">Monthly Analytics Report</p>
                </div>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500"/>
                    <p class="block col-span-6">2 brands under one account</p>
                </div>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500"/>
                    <p class="block col-span-6">Delivered weekly</p>
                </div>
            </div>
            <div class="grid items-center grid-cols-2 gap-x-8" >
                <div class="grid items-center justify-start grid-cols-8 col-span-2 py-4 text-left border-b border-gray-300">
                    <span class="block col-span-1 text-xl text-green-500">$697</span>
                    <h3 class="block col-span-6 py-4 text-lg tracking-widest text-left uppercase deco">Big Band Package</h3>
                </div>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500"/>
                    <p class="block col-span-6">Everything in the All That Jazz Package</p>
                </div>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500"/>
                    <p class="block col-span-6">Unlimited brands under one account</p>
                </div>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500" />
                    <p class="block col-span-6">Single content requests included in subscription (one task at a time)</p>
                </div>
                <div class="grid items-center justify-start grid-cols-8 py-4 text-left gap-x-8">
                    <x-icons.check class="block w-12 h-8 col-span-2 text-green-500"/>
                    <p class="block col-span-6">20 content sets every month</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
