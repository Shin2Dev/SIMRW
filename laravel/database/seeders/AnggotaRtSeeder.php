<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaRtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('anggota_rt')->insert([
            [
                // Ketua RT 1
                'id_warga' => 4,
                'id_rt' => 1,
                'id_jabatan' => 5,
                'foto_profil' => 'foto_ketua_rt_1.jpg',
                'periode' => '2024-2026',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // Sekretaris RT 1
                'id_warga' => 5,
                'id_rt' => 1,
                'id_jabatan' => 6,
                'foto_profil' => 'foto_sekretaris_rt_1.jpg',
                'periode' => '2024-2026',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // Ketua RT 2
                'id_warga' => 6,
                'id_rt' => 2,
                'id_jabatan' => 5,
                'foto_profil' => 'foto_ketua_rt_2.jpg',
                'periode' => '2024-2026',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // Ketua RT 3
                'id_warga' => 7,
                'id_rt' => 3,
                'id_jabatan' => 5,
                'foto_profil' => 'foto_ketua_rt_3.jpg',
                'periode' => '2024-2026',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // Ketua RT 4
                'id_warga' => 8,
                'id_rt' => 4,
                'id_jabatan' => 5,
                'foto_profil' => 'foto_ketua_rt_4.jpg',
                'periode' => '2024-2026',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
