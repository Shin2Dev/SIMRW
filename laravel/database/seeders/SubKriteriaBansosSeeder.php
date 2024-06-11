<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKriteriaBansosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subKriteriaBansos = [
            [
                'id_kriteria' => 1,
                'nama_sub_kriteria' => 'Pegawai Swasta / Negeri',
                'kategori_sub_kriteria' => 'Kurang',
                'nilai_sub_kriteria' => 1,
            ],
            [
                'id_kriteria' => 1,
                'nama_sub_kriteria' => 'Pengusaha / Pedagang',
                'kategori_sub_kriteria' => 'Cukup',
                'nilai_sub_kriteria' => 2,
            ],
            [
                'id_kriteria' => 1,
                'nama_sub_kriteria' => 'Petani / Buruh / Karyawan',
                'kategori_sub_kriteria' => 'Memenuhi',
                'nilai_sub_kriteria' => 3,
            ],
            [
                'id_kriteria' => 1,
                'nama_sub_kriteria' => 'Tidak Bekerja / Pengangguran',
                'kategori_sub_kriteria' => 'Sangat Memenuhi',
                'nilai_sub_kriteria' => 4,
            ],
            [
                'id_kriteria' => 2,
                'nama_sub_kriteria' => '> Rp. 3.000.000',
                'kategori_sub_kriteria' => 'Kurang',
                'nilai_sub_kriteria' => 4,
            ],
            [
                'id_kriteria' => 2,
                'nama_sub_kriteria' => 'Rp. 1.500.000 - Rp. 3.000.000',
                'kategori_sub_kriteria' => 'Cukup',
                'nilai_sub_kriteria' => 3,
            ],
            [
                'id_kriteria' => 2,
                'nama_sub_kriteria' => 'Rp. 500.000 - Rp. 1.500.000',
                'kategori_sub_kriteria' => 'Memenuhi',
                'nilai_sub_kriteria' => 2,
            ],
            [
                'id_kriteria' => 2,
                'nama_sub_kriteria' => '< Rp. 500.000',
                'kategori_sub_kriteria' => 'Sangat Memenuhi',
                'nilai_sub_kriteria' => 1,
            ],
            [
                'id_kriteria' => 3,
                'nama_sub_kriteria' => '< 25 Tahun',
                'kategori_sub_kriteria' => 'Kurang',
                'nilai_sub_kriteria' => 1,
            ],
            [
                'id_kriteria' => 3,
                'nama_sub_kriteria' => '26 - 35 Tahun',
                'kategori_sub_kriteria' => 'Cukup',
                'nilai_sub_kriteria' => 2,
            ],
            [
                'id_kriteria' => 3,
                'nama_sub_kriteria' => '36 - 45 Tahun',
                'kategori_sub_kriteria' => 'Memenuhi',
                'nilai_sub_kriteria' => 3,
            ],
            [
                'id_kriteria' => 3,
                'nama_sub_kriteria' => '> 46 Tahun',
                'kategori_sub_kriteria' => 'Sangat Memenuhi',
                'nilai_sub_kriteria' => 4,
            ],
            [
                'id_kriteria' => 4,
                'nama_sub_kriteria' => 'Perguruan Tinggi',
                'kategori_sub_kriteria' => 'Kurang',
                'nilai_sub_kriteria' => 1,
            ],
            [
                'id_kriteria' => 4,
                'nama_sub_kriteria' => 'SMA',
                'kategori_sub_kriteria' => 'Cukup',
                'nilai_sub_kriteria' => 2,
            ],
            [
                'id_kriteria' => 4,
                'nama_sub_kriteria' => 'SMP',
                'kategori_sub_kriteria' => 'Memenuhi',
                'nilai_sub_kriteria' => 3,
            ],
            [
                'id_kriteria' => 4,
                'nama_sub_kriteria' => 'SD',
                'kategori_sub_kriteria' => 'Sangat Memenuhi',
                'nilai_sub_kriteria' => 4,
            ],
            [
                'id_kriteria' => 5,
                'nama_sub_kriteria' => 'Keramik',
                'kategori_sub_kriteria' => 'Kurang',
                'nilai_sub_kriteria' => 1,
            ],
            [
                'id_kriteria' => 5,
                'nama_sub_kriteria' => 'Plester / Semen',
                'kategori_sub_kriteria' => 'Cukup',
                'nilai_sub_kriteria' => 2,
            ],
            [
                'id_kriteria' => 5,
                'nama_sub_kriteria' => 'Tanah',
                'kategori_sub_kriteria' => 'Memenuhi',
                'nilai_sub_kriteria' => 3,
            ],
            [
                'id_kriteria' => 6,
                'nama_sub_kriteria' => 'Tembok',
                'kategori_sub_kriteria' => 'Kurang',
                'nilai_sub_kriteria' => 1,
            ],
            [
                'id_kriteria' => 6,
                'nama_sub_kriteria' => 'Kayu',
                'kategori_sub_kriteria' => 'Cukup',
                'nilai_sub_kriteria' => 2,
            ],
            [
                'id_kriteria' => 6,
                'nama_sub_kriteria' => 'Bambu',
                'kategori_sub_kriteria' => 'Memenuhi',
                'nilai_sub_kriteria' => 3,
            ],
            [
                'id_kriteria' => 7,
                'nama_sub_kriteria' => 'Di atas 8 m2',
                'kategori_sub_kriteria' => 'Kurang',
                'nilai_sub_kriteria' => 2,
            ],
            [
                'id_kriteria' => 7,
                'nama_sub_kriteria' => 'Di bawah 8 m2',
                'kategori_sub_kriteria' => 'Memenuhi',
                'nilai_sub_kriteria' => 1,
            ],
            [
                'id_kriteria' => 8,
                'nama_sub_kriteria' => 'Mobil',
                'kategori_sub_kriteria' => 'Kurang',
                'nilai_sub_kriteria' => 1,
            ],
            [
                'id_kriteria' => 8,
                'nama_sub_kriteria' => 'Motor',
                'kategori_sub_kriteria' => 'Cukup',
                'nilai_sub_kriteria' => 2,
            ],
            [
                'id_kriteria' => 8,
                'nama_sub_kriteria' => 'Sepeda',
                'kategori_sub_kriteria' => 'Memenuhi',
                'nilai_sub_kriteria' => 3,
            ],
            [
                'id_kriteria' => 8,
                'nama_sub_kriteria' => 'Tidak Punya Kendaraan',
                'kategori_sub_kriteria' => 'Sangat Memenuhi',
                'nilai_sub_kriteria' => 4,
            ],
            [
                'id_kriteria' => 9,
                'nama_sub_kriteria' => 'PLN Subsidi',
                'kategori_sub_kriteria' => 'Kurang',
                'nilai_sub_kriteria' => 1,
            ],
            [
                'id_kriteria' => 9,
                'nama_sub_kriteria' => 'PLN Non Subsidi',
                'kategori_sub_kriteria' => 'Cukup',
                'nilai_sub_kriteria' => 2,
            ],
            [
                'id_kriteria' => 9,
                'nama_sub_kriteria' => 'Tidak Punya Penerangan',
                'kategori_sub_kriteria' => 'Memenuhi',
                'nilai_sub_kriteria' => 3,
            ],
            [
                'id_kriteria' => 10,
                'nama_sub_kriteria' => 'Milik Sendiri',
                'kategori_sub_kriteria' => 'Kurang',
                'nilai_sub_kriteria' => 1,
            ],
            [
                'id_kriteria' => 10,
                'nama_sub_kriteria' => 'Milik Orang Tua',
                'kategori_sub_kriteria' => 'Cukup',
                'nilai_sub_kriteria' => 2,
            ],
            [
                'id_kriteria' => 10,
                'nama_sub_kriteria' => 'Kontrak / Sewa',
                'kategori_sub_kriteria' => 'Memenuhi',
                'nilai_sub_kriteria' => 3,
            ],
            [
                'id_kriteria' => 10,
                'nama_sub_kriteria' => 'Bebas Sewa',
                'kategori_sub_kriteria' => 'Sangat Memenuhi',
                'nilai_sub_kriteria' => 4,
            ],
        ];

        DB::table('sub_kriteria_bansos')->insert($subKriteriaBansos);
    }
}

