<x-admin-layout>
    <div class="mb-6 flex justify-between items-center" data-aos="fade-up" data-aos-duration="800">
        <h1 class="text-2xl font-semibold text-gray-900">Daftar Materi</h1>
        <a href="{{ route('materials.create') }}"
           class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors duration-300"
           data-aos="zoom-in" data-aos-delay="200">
            Tambah Materi Baru
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>

                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tanggal Dibuat
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($materials as $material)
                        <tr class="hover:bg-gray-50 transition-colors" data-aos="fade-right" data-aos-delay="{{ $loop->iteration * 50 }}">
                           
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $material->title }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate">
                                {{ $material->description ?? 'Tidak ada deskripsi' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $material->created_at->format('d M Y, H:i') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="{{ route('materials.show', $material->id) }}"
                                       class="text-blue-600 hover:text-blue-900 transition-colors">Lihat</a>
                                    <a href="{{ route('materials.edit', $material->id) }}"
                                       class="text-indigo-600 hover:text-indigo-900 transition-colors">Edit</a>
                                    <form action="{{ route('materials.destroy', $material->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="text-red-600 hover:text-red-900 transition-colors"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus materi ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">
                                Tidak ada materi tersedia
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 bg-white border-t border-gray-200">
            {{ $materials->links() }}
        </div>
    </div>
</x-admin-layout>
