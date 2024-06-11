<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori_info')->insert([
            ['nama_kategori_info' => 'Sosial'],
            ['nama_kategori_info' => 'Keamanan'],
            ['nama_kategori_info' => 'Pendidikan'],
            ['nama_kategori_info' => 'Kesehatan'],
            ['nama_kategori_info' => 'Olahraga'],
        ]);
    }
}
