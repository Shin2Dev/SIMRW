<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('keuangan')->insert([
            [
                'id_rt' => 1,
                'tanggal' => '2024-06-01',
                'jenis' => 'Pemasukan',
                'deskripsi' => 'Iuran Kas',
                'jumlah' => 700000.00,
                'saldo' => 700000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_rt' => 1,
                'tanggal' => '2024-06-02',
                'jenis' => 'Pemasukan',
                'deskripsi' => 'Iuran Sampah',
                'jumlah' => 300000.00,
                'saldo' => 1000000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_rt' => 1,
                'tanggal' => '2024-06-04',
                'jenis' => 'Pengeluaran',
                'deskripsi' => 'Konsumsi Kerja Bakti',
                'jumlah' => 200000.00,
                'saldo' => 800000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_rt' => 2,
                'tanggal' => '2024-06-05',
                'jenis' => 'Pemasukan',
                'deskripsi' => 'Donasi Warga',
                'jumlah' => 500000.00,
                'saldo' => 1300000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_rt' => 2,
                'tanggal' => '2024-06-06',
                'jenis' => 'Pengeluaran',
                'deskripsi' => 'Pembelian Alat Kebersihan',
                'jumlah' => 150000.00,
                'saldo' => 1150000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_rt' => 3,
                'tanggal' => '2024-06-07',
                'jenis' => 'Pemasukan',
                'deskripsi' => 'Iuran Keamanan',
                'jumlah' => 250000.00,
                'saldo' => 1400000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_rt' => 3,
                'tanggal' => '2024-06-08',
                'jenis' => 'Pengeluaran',
                'deskripsi' => 'Biaya Listrik',
                'jumlah' => 100000.00,
                'saldo' => 1300000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_rt' => 4,
                'tanggal' => '2024-06-09',
                'jenis' => 'Pemasukan',
                'deskripsi' => 'Iuran Kebersihan',
                'jumlah' => 300000.00,
                'saldo' => 1600000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_rt' => 4,
                'tanggal' => '2024-06-10',
                'jenis' => 'Pengeluaran',
                'deskripsi' => 'Pembelian Tanaman Hias',
                'jumlah' => 200000.00,
                'saldo' => 1400000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
