<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-blue-50 to-indigo-100">
        <div data-aos="fade-down" data-aos-duration="1000">
            <a href="/">
                <img src="https://i.pinimg.com/736x/e7/76/9e/e7769e44cb342b99e4aca6e42a0df3ea.jpg" alt="" class="rounded-lg" style="width: 100px;" height="100px">

            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
             data-aos="zoom-in" data-aos-delay="200" data-aos-duration="800">

            <h2 class="text-2xl font-bold text-center text-gray-800 mb-5">Daftar Akun Baru</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4" data-aos="fade-up" data-aos-delay="300">
                    <x-input-label for="name" :value="__('Nama')" />
                    <x-text-input id="name" class="block mt-1 w-full transition duration-300 ease-in-out transform hover:scale-[1.01] focus:scale-[1.01]"
                                  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mb-4" data-aos="fade-up" data-aos-delay="400">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full transition duration-300 ease-in-out transform hover:scale-[1.01] focus:scale-[1.01]"
                                  type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-4" data-aos="fade-up" data-aos-delay="500">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full transition duration-300 ease-in-out transform hover:scale-[1.01] focus:scale-[1.01]"
                                  type="password" name="password" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-4" data-aos="fade-up" data-aos-delay="600">
                    <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full transition duration-300 ease-in-out transform hover:scale-[1.01] focus:scale-[1.01]"
                                  type="password" name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between mt-6" data-aos="fade-up" data-aos-delay="700">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                       href="{{ route('login') }}">
                        {{ __('Sudah punya akun?') }}
                    </a>

                    <x-primary-button class="ml-4 transition-all duration-300 transform hover:scale-105 bg-indigo-600 hover:bg-indigo-700">
                        {{ __('Daftar') }}
                    </x-primary-button>
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
