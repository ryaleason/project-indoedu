<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-blue-50 to-indigo-100">
        <div data-aos="fade-down" data-aos-duration="1000">
            <a href="/">
                <img src="https://i.pinimg.com/736x/e7/76/9e/e7769e44cb342b99e4aca6e42a0df3ea.jpg" alt="" class="rounded-lg" style="width: 200px;" height="200px">

            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
             data-aos="zoom-in" data-aos-delay="200" data-aos-duration="800">

            <h2 class="text-2xl font-bold text-center text-gray-800 mb-5">Login</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4" data-aos="fade-up" data-aos-delay="300">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full transition duration-300 ease-in-out transform hover:scale-[1.01] focus:scale-[1.01]"
                                  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-4" data-aos="fade-up" data-aos-delay="400">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full transition duration-300 ease-in-out transform hover:scale-[1.01] focus:scale-[1.01]"
                                  type="password" name="password" required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4" data-aos="fade-up" data-aos-delay="500">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Ingat saya') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="flex items-center">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Lupa password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="flex items-center">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-3" href="{{ route('register') }}">
                            {{ __('Daftar') }}
                        </a>

                        <x-primary-button class="transition-all duration-300 transform hover:scale-105 bg-indigo-600 hover:bg-indigo-700">
                            {{ __('Login') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
        });
    </script>
</x-guest-layout>
