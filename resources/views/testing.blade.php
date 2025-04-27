<x-admin-layout>
    <div class="mb-6" data-aos="fade-up" data-aos-duration="800">
        <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
    </div>

    <div class="mb-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white overflow-hidden shadow-md rounded-lg" data-aos="fade-up" data-aos-delay="100">
            <div class="px-6 py-5 bg-gradient-to-r from-blue-500 to-blue-600">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-white p-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-white truncate">
                                Total Materi
                            </dt>
                            <dd>
                                <div class="text-lg font-medium text-white">
                                    {{ App\Models\Material::count() }}
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="px-6 py-4">
                <div class="text-right">
                    <a href="{{ route('materials.index') }}" class="text-sm font-medium text-blue-600 hover:text-blue-500">
                        Lihat semua materi
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow-md rounded-lg" data-aos="fade-up" data-aos-delay="200">
            <div class="px-6 py-5 bg-gradient-to-r from-green-500 to-green-600">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-white p-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-white truncate">
                                Total Pengguna
                            </dt>
                            <dd>
                                <div class="text-lg font-medium text-white">
                                    {{ App\Models\User::count() }}
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="px-6 py-4">
                <div class="text-right">
                    <a href="{{ route('profile.edit') }}" class="text-sm font-medium text-green-600 hover:text-green-500">
                        Lihat profil
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow-md rounded-lg" data-aos="fade-up" data-aos-delay="300">
            <div class="px-6 py-5 bg-gradient-to-r from-purple-500 to-purple-600">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-white p-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-white truncate">
                                Tanggal
                            </dt>
                            <dd>
                                <div class="text-lg font-medium text-white">
                                    {{ now()->format('d M Y') }}
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="px-6 py-4">
                <div class="text-right">
                    <span class="text-sm font-medium text-purple-600">
                        {{ now()->format('H:i') }} WIB
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-6 grid grid-cols-1 gap-6">
        <div class="bg-white overflow-hidden shadow-md rounded-lg" data-aos="fade-up" data-aos-delay="400">
            <div class="px-6 py-5 border-b border-gray-200">
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                    Materi Terbaru
                </h3>
            </div>
            <div class="px-6 py-5">
                <div class="flow-root">
                    <ul role="list" class="-my-5 divide-y divide-gray-200">
                        @forelse(App\Models\Material::latest()->take(5)->get() as $material)
                        <li class="py-4" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 50 }}">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                        {{ $material->title }}
                                    </p>
                                    <p class="text-sm text-gray-500 truncate">
                                        {{ \Illuminate\Support\Str::limit($material->description, 50) ?? 'Tidak ada deskripsi' }}
                                    </p>
                                </div>
                                <div>
                                    <a href="{{ route('materials.show', $material->id) }}" class="inline-flex items-center shadow-sm px-3 py-1 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                                        Lihat
                                    </a>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="py-4">
                            <div class="flex items-center space-x-4">
                                <p class="text-sm text-gray-500">
                                    Belum ada materi tersedia.
                                </p>
                            </div>
                        </li>
                        @endforelse
                    </ul>
                </div>
                <div class="mt-6">
                    <a href="{{ route('materials.index') }}" class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Lihat Semua Materi
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
