<x-admin-layout>
    <div class="mb-6 flex justify-between items-center" data-aos="fade-up" data-aos-duration="800">
        <h1 class="text-2xl font-semibold text-gray-900">Detail Materi</h1>
        <div class="flex space-x-2">
           
        </div>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <div class="p-6">
            <div class="mb-4 border-b pb-4">
                <h2 class="text-xl font-bold text-gray-800">{{ $material->title }}</h2>
                <p class="text-sm text-gray-500 mt-1">Dibuat pada: {{ $material->created_at->format('d M Y, H:i') }}</p>
            </div>

            @if($material->description)
            <div class="mb-6" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-md font-semibold text-gray-700 mb-2">Deskripsi:</h3>
                <p class="text-gray-600">{{ $material->description }}</p>
            </div>
            @endif

            <div class="mb-4" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-md font-semibold text-gray-700 mb-2">Konten Youtube:</h3>
                <div class="prose max-w-none text-gray-600 bg-gray-50 p-4 rounded-md">
                    <a href="{!! nl2br(e($material->content)) !!}" target="_blank" class="text-blue-600" rel="noopener noreferrer">Klick Disini</a>
                </div>
            </div>

            
        </div>
    </div>
</x-admin-layout>
