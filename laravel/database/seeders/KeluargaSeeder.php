<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('keluarga')->insert([
            [
                'id_rt' => 1,
                'nomor_kk' => '3507231234560001',
                'gambar_kk' => 'gambar_kk1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_rt' => 1,
                'nomor_kk' => '3507232345670002',
                'gambar_kk' => 'gambar_kk2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
