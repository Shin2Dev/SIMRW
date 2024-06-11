<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jabatan')->insert([
            ['nama_jabatan' => 'Ketua RW'],
            ['nama_jabatan' => 'Sekretaris RW'],
            ['nama_jabatan' => 'Bendahara RW'],
            ['nama_jabatan' => 'Staff RW'],
            ['nama_jabatan' => 'Ketua RT'],
            ['nama_jabatan' => 'Sekretaris RT'],
            ['nama_jabatan' => 'Bendahara RT'],
            ['nama_jabatan' => 'Staff RT'],
        ]);
    }
}
