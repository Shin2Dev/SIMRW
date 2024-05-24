<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data Sampel
        $data_warga = [
            [
                'nama' => 'Chamila',
                'nik' => '3506190023010099',
                'alamat' => 'Malang, Jawa Timur',
                'jenis_kelamin' => 'Perempuan',
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => '2004-01-01',
                'no_hp' => '082234568271',
                'status_kawin' => false,
                'pekerjaan' => 'Mahasiswa',
                'status_warga' => true
            ], [
                'nama' => 'Luqiana',
                'nik' => '3506190023010095',
                'alamat' => 'Malang, Jawa Timur',
                'jenis_kelamin' => 'Perempuan',
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => '2004-01-02',
                'no_hp' => '0822345683211',
                'status_kawin' => false,
                'pekerjaan' => 'Mahasiswa',
                'status_warga' => true
            ], [
                'nama' => 'Agustina',
                'nik' => '3506190023010092',
                'alamat' => 'Malang, Jawa Timur',
                'jenis_kelamin' => 'Perempuan',
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => '2004-01-03',
                'no_hp' => '08223456832152',
                'status_kawin' => false,
                'pekerjaan' => 'Mahasiswa',
                'status_warga' => true
            ]
        ];

        // Insert Data Warga
        DB::table('warga') -> insert($data_warga);
    }
}
