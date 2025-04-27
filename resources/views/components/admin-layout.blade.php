@props(['title' => ''])

<x-app-layout>
    <!-- Konten admin layout -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden  sm:rounded-sm p-6">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-app-layout>
