<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $surat = [
            [
                'id_warga' => 9,
                'id_rt' => 1,
                'id_jenis_surat' => 1,
                'id_anggota_rt' => 1,
                // 'id_anggota_rw' => 1,
                'nomor_surat' => 'RT001/001/06/2024',
                'keperluan_surat' => 'Keterangan Domisili',
                'status_surat' => 'Disetujui',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_warga' => 13,
                'id_rt' => 1,
                'id_jenis_surat' => 2,
                'id_anggota_rt' => 1,
                // 'id_anggota_rw' => 1,
                'nomor_surat' => null,
                'keperluan_surat' => 'Keterangan Usaha',
                'status_surat' => 'Dalam Proses',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_warga' => 10,
                'id_rt' => 1,
                'id_jenis_surat' => 1,
                'id_anggota_rt' => 1,
                // 'id_anggota_rw' => 1,
                'nomor_surat' => null,
                'keperluan_surat' => 'Keterangan Domisili',
                'status_surat' => 'Ditolak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($surat as $s) {
            DB::table('surat')->insert($s);
        }
    }
}
