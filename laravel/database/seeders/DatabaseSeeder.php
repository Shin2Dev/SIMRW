<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this -> call ([
            RtSeeder::class,
            KategoriInfoSeeder::class,
            InformasiSeeder::class,
            KeluargaSeeder::class,
            KeuanganSeeder::class,
            WargaSeeder::class,
            JenisSuratSeeder::class,
            JabatanSeeder::class,
            AnggotaRtSeeder::class,
            AnggotaRwSeeder::class,
            SuratSeeder::class,
            UserSeeder::class,
            KriteriaBansosSeeder::class,
            SubKriteriaBansosSeeder::class,
            CalonPenerimaBansosSeeder::class
        ]);
    }
}
