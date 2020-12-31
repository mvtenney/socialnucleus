<x-guest-layout>
    <div class="flex">
        <x-jet-authentication-card>
            <x-slot name="logo">
                <x-jet-authentication-card-logo class="self-start w-48 mt-0" />
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="pt-4 mt-8 border-t border-gray-400">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block w-full p-2 mt-1" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block w-full p-2 mt-1" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <x-jet-button class="items-center justify-center w-full py-4 my-4 text-center yellow-btn ">
                    {{ __('Login') }}
                </x-jet-button>

                <div class="flex items-center justify-center pt-4 mt-4 border-t border-gray-400">
                    @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif
                </div>

                <div class="flex items-center justify-center pb-4 mt-4 mb-8 border-b border-gray-400">
                    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>
                </div>

                {{-- Login with Facebook --}}
                <div class="flex items-center justify-end mt-8">
                    <a class="btn" href="{{ url('auth/facebook') }}"
                        style="background: #3B5499; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                        Login with Facebook
                    </a>
                </div>

            </form>
        </x-jet-authentication-card>
        <div class="absolute top-0 bottom-0 left-0 right-0 z-0 w-full h-full overflow-hidden">
            <video autoplay muted loop id="mosaicVideoBackground" class="flex-shrink object-cover w-full h-full">
                <source src="/video/mosaic-woman.mp4" type="video/mp4">
            </video>
        </div>
    </div>

</x-guest-layout>
