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
            ['nama_kategori' => 'Sosial'],
            ['nama_kategori' => 'Keamanan'],
            ['nama_kategori' => 'Pendidikan'],
            ['nama_kategori' => 'Kesehatan'],
            ['nama_kategori' => 'Olahraga'],
        ]);
    }
}
