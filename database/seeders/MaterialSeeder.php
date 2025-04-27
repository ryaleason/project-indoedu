<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materials = [
            [
                'title' => 'Pengenalan Laravel 11',
                'description' => 'Materi dasar tentang framework Laravel 11',
                'content' => "Laravel adalah framework PHP yang elegan dan ekspresif. Versi 11 membawa banyak fitur baru yang menarik untuk pengembangan aplikasi web modern.\n\nBeberapa fitur unggulan Laravel 11 termasuk:\n- Peningkatan performa\n- Pembaruan Routing System\n- Fitur-fitur keamanan baru\n- Dan banyak lagi!"
            ],
            [
                'title' => 'Belajar Tailwind CSS',
                'description' => 'Tutorial lengkap mengenai penggunaan Tailwind CSS',
                'content' => "Tailwind CSS adalah framework CSS utilitas-pertama untuk membangun desain kustom dengan cepat tanpa meninggalkan HTML Anda.\n\nKelebihan menggunakan Tailwind CSS:\n- Fleksibilitas yang tinggi\n- Development yang lebih cepat\n- File CSS yang lebih kecil di production\n- Kemudahan dalam maintenance"
            ],
            [
                'title' => 'Menerapkan Animasi dengan AOS',
                'description' => 'Tutorial implementasi animasi menggunakan library AOS',
                'content' => "AOS (Animate On Scroll) adalah library animasi yang memungkinkan elemen muncul dengan animasi saat di-scroll.\n\nCara menggunakan AOS:\n1. Install library via npm atau gunakan CDN\n2. Inisialisasi AOS di JavaScript\n3. Tambahkan atribut data-aos pada elemen yang ingin dianimasikan\n4. Sesuaikan parameter animasi sesuai kebutuhan"
            ],
        ];

        foreach ($materials as $material) {
            Material::create($material);
        }
    }
}
