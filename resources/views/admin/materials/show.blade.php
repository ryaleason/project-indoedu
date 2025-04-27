<x-admin-layout>
    <div class="mb-6 flex justify-between items-center" data-aos="fade-up" data-aos-duration="800">
        <h1 class="text-2xl font-semibold text-gray-900">Detail Materi</h1>
        <div class="flex space-x-2">
            <a href="{{ route('materials.edit', $material->id) }}"
               class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-colors duration-300"
               data-aos="zoom-in" data-aos-delay="200">
                Edit
            </a>
            <a href="{{ route('materials.index') }}"
               class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 transition-colors duration-300"
               data-aos="zoom-in" data-aos-delay="300">
                Kembali
            </a>
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
                <h3 class="text-md font-semibold text-gray-700 mb-2">Konten:</h3>
                <div class="prose max-w-none text-gray-600 bg-gray-50 p-4 rounded-md">
                    <a href="{!! nl2br(e($material->content)) !!}" target="_blank" rel="noopener noreferrer">Link Youtube</a>
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <form action="{{ route('materials.destroy', $material->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors duration-300"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus materi ini?')"
                            data-aos="zoom-in" data-aos-delay="400">
                        Hapus Materi
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
