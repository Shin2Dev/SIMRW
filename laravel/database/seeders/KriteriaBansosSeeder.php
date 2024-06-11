<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaBansosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kriteria_bansos')->insert([
            [
                'kode_kriteria' => 'C1',
                'nama_kriteria' => 'Pekerjaan',
                'atribut' => 'Benefit'
            ],
            [
                'kode_kriteria' => 'C2',
                'nama_kriteria' => 'Penghasilan Perbulan',
                'atribut' => 'Cost'
            ],
            [
                'kode_kriteria' => 'C3',
                'nama_kriteria' => 'Usia',
                'atribut' => 'Benefit'
            ],
            [
                'kode_kriteria' => 'C4',
                'nama_kriteria' => 'Pendidikan',
                'atribut' => 'Benefit'
            ],
            [
                'kode_kriteria' => 'C5',
                'nama_kriteria' => 'Luas Bangunan',
                'atribut' => 'Cost'
            ],
            [
                'kode_kriteria' => 'C6',
                'nama_kriteria' => 'Jenis Lantai Rumah',
                'atribut' => 'Benefit'
            ],
            [
                'kode_kriteria' => 'C7',
                'nama_kriteria' => 'Jenis Dinding Rumah',
                'atribut' => 'Benefit'
            ],
            [
                'kode_kriteria' => 'C8',
                'nama_kriteria' => 'Kendaraan',
                'atribut' => 'Benefit'
            ],
            [
                'kode_kriteria' => 'C9',
                'nama_kriteria' => 'Sumber Penerangan',
                'atribut' => 'Benefit'
            ],
            [
                'kode_kriteria' => 'C10',
                'nama_kriteria' => 'Status Kepemilikan Rumah',
                'atribut' => 'Benefit'
            ]
        ]);
    }
}

