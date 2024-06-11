<?php

namespace Database\Seeders;

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
                'tanggal_keuangan' => '2024-06-01',
                'jenis_keuangan' => 'Pemasukan',
                'deskripsi_keuangan' => 'Iuran Kas',
                'jumlah_keuangan' => 700000.00,
                'saldo' => 700000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_rt' => 1,
                'tanggal_keuangan' => '2024-06-02',
                'jenis_keuangan' => 'Pemasukan',
                'deskripsi_keuangan' => 'Iuran Sampah',
                'jumlah_keuangan' => 300000.00,
                'saldo' => 1000000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_rt' => 1,
                'tanggal_keuangan' => '2024-06-04',
                'jenis_keuangan' => 'Pengeluaran',
                'deskripsi_keuangan' => 'Konsumsi Kerja Bakti',
                'jumlah_keuangan' => 200000.00,
                'saldo' => 800000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
