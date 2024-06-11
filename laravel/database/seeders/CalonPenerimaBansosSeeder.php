<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalonPenerimaBansosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $calonPenerimaBansos = [
            [
                // RUDI HARTONO RT 001
                'id_warga' => 9,
                'id_rt' => 1,
                'pekerjaan' => 'Tidak Bekerja / Pengangguran',
                'penghasilan_bulanan' => '< Rp. 500.000',
                'usia' => '36 - 45 Tahun',
                'pendidikan' => 'SD',
                'luas_bangunan' => 'Di atas 8 m2',
                'jenis_lantai' => 'Plester / Semen',
                'jenis_dinding' => 'Kayu',
                'kendaraan' => 'Sepeda',
                'sumber_penerangan' => 'PLN Non Subsidi',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // RUDI SETYO WIBOWO RT 001
                'id_warga' => 10,
                'id_rt' => 1,
                'pekerjaan' => 'Pegawai Swasta / Negeri',
                'penghasilan_bulanan' => '> Rp. 3.000.000',
                'usia' => '< 25 Tahun',
                'pendidikan' => 'Perguruan Tinggi',
                'luas_bangunan' => 'Di atas 8 m2',
                'jenis_lantai' => 'Keramik',
                'jenis_dinding' => 'Tembok',
                'kendaraan' => 'Mobil',
                'sumber_penerangan' => 'PLN Subsidi',
                'status_kepemilikan_rumah' => 'Kontrak / Sewa',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // SITI AYU PUTRI RT 001
                'id_warga' => 11,
                'id_rt' => 1,
                'pekerjaan' => 'Petani / Buruh / Karyawan',
                'penghasilan_bulanan' => 'Rp. 500.000 - Rp. 1.500.000',
                'usia' => '36 - 45 Tahun',
                'pendidikan' => 'SMP',
                'luas_bangunan' => 'Di atas 8 m2',
                'jenis_lantai' => 'Plester / Semen',
                'jenis_dinding' => 'Kayu',
                'kendaraan' => 'Motor',
                'sumber_penerangan' => 'PLN Non Subsidi',
                'status_kepemilikan_rumah' => 'Milik Orang Tua',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // BUDI AGUNG WIJAYA RT 001
                'id_warga' => 12,
                'id_rt' => 1,
                'pekerjaan' => 'Pengusaha / Pedagang',
                'penghasilan_bulanan' => 'Rp. 1.500.000 - Rp. 3.000.000',
                'usia' => '26 - 35 Tahun',
                'pendidikan' => 'Perguruan Tinggi',
                'luas_bangunan' => 'Di atas 8 m2',
                'jenis_lantai' => 'Tanah',
                'jenis_dinding' => 'Tembok',
                'kendaraan' => 'Motor',
                'sumber_penerangan' => 'PLN Subsidi',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // RATNA WATI SARI RT 001
                'id_warga' => 13,
                'id_rt' => 1,
                'pekerjaan' => 'Tidak Bekerja / Pengangguran',
                'penghasilan_bulanan' => '< Rp. 500.000',
                'usia' => '> 46 Tahun',
                'pendidikan' => 'SMP',
                'luas_bangunan' => 'Di bawah 8 m2',
                'jenis_lantai' => 'Plester / Semen',
                'jenis_dinding' => 'Bambu',
                'kendaraan' => 'Motor',
                'sumber_penerangan' => 'PLN Non Subsidi',
                'status_kepemilikan_rumah' => 'Kontrak / Sewa',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // SUSI WATI RT 002
                'id_warga' => 14, // ganti dengan id_warga yang benar
                'id_rt' => 2, // ganti dengan id_rt yang benar
                'pekerjaan' => 'Petani / Buruh / Karyawan',
                'penghasilan_bulanan' => 'Rp. 500.000 - Rp. 1.500.000',
                'usia' => '36 - 45 Tahun',
                'pendidikan' => 'SMA',
                'luas_bangunan' => 'Di atas 8 m2',
                'jenis_lantai' => 'Plester / Semen',
                'jenis_dinding' => 'Tembok',
                'kendaraan' => 'Motor',
                'sumber_penerangan' => 'PLN Subsidi',
                'status_kepemilikan_rumah' => 'Kontrak / Sewa',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // AMIRA LESTARI RT 002
                'id_warga' => 15, // ganti dengan id_warga yang benar
                'id_rt' => 2, // ganti dengan id_rt yang benar
                'pekerjaan' => 'Tidak Bekerja / Pengangguran',
                'penghasilan_bulanan' => '< Rp. 500.000',
                'usia' => '26 - 35 Tahun',
                'pendidikan' => 'SD',
                'luas_bangunan' => 'Di bawah 8 m2',
                'jenis_lantai' => 'Tanah',
                'jenis_dinding' => 'Bambu',
                'kendaraan' => 'Motor',
                'sumber_penerangan' => 'PLN Non Subsidi',
                'status_kepemilikan_rumah' => 'Kontrak / Sewa',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // RAHMAT HIDAYAT RT 002
                'id_warga' => 16, // ganti dengan id_warga yang benar
                'id_rt' => 2, // ganti dengan id_rt yang benar
                'pekerjaan' => 'Pegawai Swasta / Negeri',
                'penghasilan_bulanan' => '> Rp. 3.000.000',
                'usia' => '< 25 Tahun',
                'pendidikan' => 'Perguruan Tinggi',
                'luas_bangunan' => 'Di atas 8 m2',
                'jenis_lantai' => 'Keramik',
                'jenis_dinding' => 'Tembok',
                'kendaraan' => 'Mobil',
                'sumber_penerangan' => 'PLN Subsidi',
                'status_kepemilikan_rumah' => 'Milik Orang Tua',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // SRI WULAN RT 002
                'id_warga' => 17, // ganti dengan id_warga yang benar
                'id_rt' => 2, // ganti dengan id_rt yang benar
                'pekerjaan' => 'Pengusaha / Pedagang',
                'penghasilan_bulanan' => 'Rp. 1.500.000 - Rp. 3.000.000',
                'usia' => '26 - 35 Tahun',
                'pendidikan' => 'SMA',
                'luas_bangunan' => 'Di atas 8 m2',
                'jenis_lantai' => 'Keramik',
                'jenis_dinding' => 'Tembok',
                'kendaraan' => 'Motor',
                'sumber_penerangan' => 'PLN Non Subsidi',
                'status_kepemilikan_rumah' => 'Bebas Sewa',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // TONO SUDARTO RT 002
                'id_warga' => 18, // ganti dengan id_warga yang benar
                'id_rt' => 2, // ganti dengan id_rt yang benar
                'pekerjaan' => 'Tidak Bekerja / Pengangguran',
                'penghasilan_bulanan' => '< Rp. 500.000',
                'usia' => '< 25 Tahun',
                'pendidikan' => 'SD',
                'luas_bangunan' => 'Di bawah 8 m2',
                'jenis_lantai' => 'Tanah',
                'jenis_dinding' => 'Kayu',
                'kendaraan' => 'Tidak Punya Kendaraan',
                'sumber_penerangan' => 'PLN Non Subsidi',
                'status_kepemilikan_rumah' => 'Milik Orang Tua',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // Bambang Sutomo RT 003
                'id_warga' => 19, // ganti dengan id_warga yang benar
                'id_rt' => 3, // ganti dengan id_rt yang benar
                'pekerjaan' => 'Tidak Bekerja / Pengangguran',
                'penghasilan_bulanan' => '< Rp. 500.000',
                'usia' => '36 - 45 Tahun',
                'pendidikan' => 'SMP',
                'luas_bangunan' => 'Di bawah 8 m2',
                'jenis_lantai' => 'Tanah',
                'jenis_dinding' => 'Bambu',
                'kendaraan' => 'Tidak Punya Kendaraan',
                'sumber_penerangan' => 'Tidak Punya Penerangan',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // Sri Wulandari RT 003
                'id_warga' => 20, // ganti dengan id_warga yang benar
                'id_rt' => 3, // ganti dengan id_rt yang benar
                'pekerjaan' => 'Pengusaha / Pedagang',
                'penghasilan_bulanan' => 'Rp. 1.500.000 - Rp. 3.000.000',
                'usia' => '> 46 Tahun',
                'pendidikan' => 'Perguruan Tinggi',
                'luas_bangunan' => 'Di atas 8 m2',
                'jenis_lantai' => 'Keramik',
                'jenis_dinding' => 'Tembok',
                'kendaraan' => 'Motor',
                'sumber_penerangan' => 'PLN Subsidi',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // Haryo Leksono RT 003
                'id_warga' => 21, // ganti dengan id_warga yang benar
                'id_rt' => 3, // ganti dengan id_rt yang benar
                'pekerjaan' => 'Petani / Buruh / Karyawan',
                'penghasilan_bulanan' => 'Rp. 500.000 - Rp. 1.500.000',
                'usia' => '36 - 45 Tahun',
                'pendidikan' => 'SMP',
                'luas_bangunan' => 'Di atas 8 m2',
                'jenis_lantai' => 'Plester / Semen',
                'jenis_dinding' => 'Tembok',
                'kendaraan' => 'Tidak Punya Kendaraan',
                'sumber_penerangan' => 'Tidak Punya Penerangan',
                'status_kepemilikan_rumah' => 'Kontrak / Sewa',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // Tuti Sugiarti RT 003
                'id_warga' => 22, // ganti dengan id_warga yang benar
                'id_rt' => 3, // ganti dengan id_rt yang benar
                'pekerjaan' => 'Tidak Bekerja / Pengangguran',
                'penghasilan_bulanan' => '< Rp. 500.000',
                'usia' => '26 - 35 Tahun',
                'pendidikan' => 'SD',
                'luas_bangunan' => 'Di atas 8 m2',
                'jenis_lantai' => 'Plester / Semen',
                'jenis_dinding' => 'Bambu',
                'kendaraan' => 'Motor',
                'sumber_penerangan' => 'PLN Non Subsidi',
                'status_kepemilikan_rumah' => 'Milik Orang Tua',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // Leli Ayu Susanto RT 003
                'id_warga' => 23, // ganti dengan id_warga yang benar
                'id_rt' => 3, // ganti dengan id_rt yang benar
                'pekerjaan' => 'Pengusaha / Pedagang',
                'penghasilan_bulanan' => 'Rp. 1.500.000 - Rp. 3.000.000',
                'usia' => '36 - 45 Tahun',
                'pendidikan' => 'SMA',
                'luas_bangunan' => 'Di atas 8 m2',
                'jenis_lantai' => 'Keramik',
                'jenis_dinding' => 'Tembok',
                'kendaraan' => 'Motor',
                'sumber_penerangan' => 'Tidak Punya Penerangan',
                'status_kepemilikan_rumah' => 'Bebas Sewa',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // Rudi Hartono Agung Supriyadi RT 004
                'id_warga' => 24, // ganti dengan id_warga yang benar
                'id_rt' => 4, // ganti dengan id_rt yang benar
                'pekerjaan' => 'Tidak Bekerja / Pengangguran',
                'penghasilan_bulanan' => '< Rp. 500.000',
                'usia' => '36 - 45 Tahun',
                'pendidikan' => 'SMA',
                'luas_bangunan' => 'Di bawah 8 m2',
                'jenis_lantai' => 'Plester / Semen',
                'jenis_dinding' => 'Bambu',
                'kendaraan' => 'Sepeda',
                'sumber_penerangan' => 'PLN Non Subsidi',
                'status_kepemilikan_rumah' => 'Kontrak / Sewa',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // Siti Aisyah Fatimah RT 004
                'id_warga' => 25, // ganti dengan id_warga yang benar
                'id_rt' => 4, // ganti dengan id_rt yang benar
                'pekerjaan' => 'Petani / Buruh / Karyawan',
                'penghasilan_bulanan' => 'Rp. 500.000 - Rp. 1.500.000',
                'usia' => '> 46 Tahun',
                'pendidikan' => 'SMP',
                'luas_bangunan' => 'Di atas 8 m2',
                'jenis_lantai' => 'Plester / Semen',
                'jenis_dinding' => 'Kayu',
                'kendaraan' => 'Motor',
                'sumber_penerangan' => 'PLN Subsidi',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // Ayu Lestari Wati RT 004
                'id_warga' => 26, // ganti dengan id_warga yang benar
                'id_rt' => 4, // ganti dengan id_rt yang benar
                'pekerjaan' => 'Petani / Buruh / Karyawan',
                'penghasilan_bulanan' => 'Rp. 500.000 - Rp. 1.500.000',
                'usia' => '36 - 45 Tahun',
                'pendidikan' => 'SMA',
                'luas_bangunan' => 'Di atas 8 m2',
                'jenis_lantai' => 'Plester / Semen',
                'jenis_dinding' => 'Tembok',
                'kendaraan' => 'Motor',
                'sumber_penerangan' => 'PLN Non Subsidi',
                'status_kepemilikan_rumah' => 'Milik Orang Tua',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // Rahmat Hidayat Wijaya RT 004
                'id_warga' => 27, // ganti dengan id_warga yang benar
                'id_rt' => 4, // ganti dengan id_rt yang benar
                'pekerjaan' => 'Tidak Bekerja / Pengangguran',
                'penghasilan_bulanan' => '< Rp. 500.000',
                'usia' => '26 - 35 Tahun',
                'pendidikan' => 'SD',
                'luas_bangunan' => 'Di bawah 8 m2',
                'jenis_lantai' => 'Tanah',
                'jenis_dinding' => 'Kayu',
                'kendaraan' => 'Motor',
                'sumber_penerangan' => 'PLN Non Subsidi',
                'status_kepemilikan_rumah' => 'Milik Sendiri',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                // Lia Sari Wulandari RT 004
                'id_warga' => 28, // ganti dengan id_warga yang benar
                'id_rt' => 4, // ganti dengan id_rt yang benar
                'pekerjaan' => 'Tidak Bekerja / Pengangguran',
                'penghasilan_bulanan' => '< Rp. 500.000',
                'usia' => '26 - 35 Tahun',
                'pendidikan' => 'SMA',
                'luas_bangunan' => 'Di atas 8 m2',
                'jenis_lantai' => 'Tanah',
                'jenis_dinding' => 'Bambu',
                'kendaraan' => 'Sepeda',
                'sumber_penerangan' => 'Tidak Punya Penerangan',
                'status_kepemilikan_rumah' => 'Bebas Sewa',
                'penerima_bansos' => false,
                'nilai_bansos' => 0,
                'ranking_bansos' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],            
        ];

        DB::table('calon_penerima_bansos')->insert($calonPenerimaBansos);
    }
}

