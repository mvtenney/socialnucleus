<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mosaic Media</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles
    </head>
    <body class="antialiased">
            <nav class="fixed top-0 right-0 z-10 w-full shadow-md">
                <div class="flex items-center justify-between flex-shrink-0 mx-auto bg-white bg-opacity-75 max-w-7xl">
                    <div class="grid grid-cols-3 text-center">
                        <a href="#" class="px-0 py-3 mx-6 text-sm font-semibold text-gray-800 border-b-2 border-yellow-700 border-opacity-0 hover:border-opacity-75">Services</a>
                        <a href="#" class="px-0 py-3 mx-6 text-sm font-semibold text-gray-800 border-b-2 border-yellow-700 border-opacity-0 hover:border-opacity-75">Examples</a>
                        <a href="{{ route('pricing') }}" class="px-0 py-3 mx-6 text-sm font-semibold text-gray-800 border-b-2 border-yellow-700 border-opacity-0 hover:border-opacity-75">Pricing</a>
                    </div>

                    <a href="/" class="text-3xl leading-none text-center text-yellow-900 deco">
                        <img class="h-24" src="/images/mosaic-logo-3.svg" alt="">
                    </a>

                    <div class="hidden py-4 mx-6 sm:block">
                        <a href="#" class="px-0 py-3 mx-6 text-sm font-semibold text-gray-800 border-b-2 border-yellow-700 border-opacity-0 hover:border-opacity-75">Guides</a>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="px-0 py-3 mx-6 text-sm font-semibold text-gray-800 border-b-2 border-yellow-700 border-opacity-0 hover:border-opacity-75">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="px-0 py-3 mx-6 text-sm font-semibold text-gray-800 border-b-2 border-yellow-700 border-opacity-0 hover:border-opacity-75">My Account</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="px-6 py-2 ml-6 text-sm font-bold text-white bg-yellow-500 rounded-lg">Sign Up</a>
                                @endif
                            @endif
                        @endif
                    </div>
                </div>
            </nav>
            @yield('header')
        <div class="mt-32">
            @yield('body')
        </div>
    </body>
</html>
