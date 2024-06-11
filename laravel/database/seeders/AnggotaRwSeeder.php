<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaRwSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('anggota_rw')->insert([
            [
                'id_warga' => 1,
                'id_jabatan' => 1,
                'foto_profil' => 'foto_ketua_rw.jpg',
                'periode' => '2023-2024',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_warga' => 2,
                'id_jabatan' => 2,
                'foto_profil' => 'foto_sekretaris_rw.jpg',
                'periode' => '2023-2024',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_warga' => 3,
                'id_jabatan' => 3,
                'foto_profil' => 'foto_bendahara_rw.jpg',
                'periode' => '2023-2024',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
