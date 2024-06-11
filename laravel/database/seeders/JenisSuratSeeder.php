<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_surat')->insert([
            ['nama_jenis_surat' => 'Surat Keterangan Domisili'],
            ['nama_jenis_surat' => 'Surat Keterangan Usaha'],
        ]);
    }
}
