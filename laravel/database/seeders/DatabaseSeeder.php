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
            UserSeeder::class,
            KategoriInfoSeeder::class,
            InformasiSeeder::class,
            KeuanganSeeder::class,
            WargaSeeder::class
        ]);
    }
}
