<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\InformasiModel;

class InformasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $informasi = [
            [
                'judul_info' => 'Kerja Bakti Rutinan',
                'id_kategori_info' => 1,
                'id_rt' => 1,
                'deskripsi_info' => 'Kerja Bakti Rutinan adalah program yang dikelola oleh Komisariat Kerja Bakti Rutinan (KBR) yang bertujuan untuk meningkatkan daya tanggap dan kualitas layanan pemerintahan di Indonesia.',
                'tanggal_info' => '2024-06-02',
                'tempat_info' => 'KBR',
                'status_info' => 'Publik',
                'gambar_info' => 'gambar_kerja_bakti.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul_info' => 'Kompetisi Catur',
                'id_kategori_info' => 5,
                'id_rt' => 1,
                'deskripsi_info' => 'Kompetisi Catur adalah kompetisi yang diadakan oleh Komisariat Kerja Bakti Rutinan (KBR) yang bertujuan untuk meningkatkan daya tanggap dan kualitas layanan pemerintahan di Indonesia.',
                'tanggal_info' => '2024-06-02',
                'tempat_info' => 'KBR',
                'status_info' => 'Publik',
                'gambar_info' => 'gambar_catur.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul_info' => 'Lomba Masak',
                'id_kategori_info' => 3,
                'id_rt' => 1,
                'deskripsi_info' => 'Lomba Masak adalah acara tahunan yang diadakan oleh komunitas lokal untuk mempromosikan keterampilan memasak dan mempererat hubungan antarwarga.',
                'tanggal_info' => '2024-07-15',
                'tempat_info' => 'Balai Desa',
                'status_info' => 'Publik',
                'gambar_info' => 'gambar_lomba_masak.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // ...
        ];

        foreach ($informasi as $info) {
            InformasiModel::create($info);
        }
    }
}

