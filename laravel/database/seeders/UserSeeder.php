<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // Ketua RW
            [
                'username' => '3507231505800001',
                'password' => Hash::make('anggota_rw'),
                'role' => 'rw',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Sekretaris RW
            [
                'username' => '3507230202900002',
                'password' => Hash::make('anggota_rw'),
                'role' => 'rw',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Bendahara RW
            [
                'username' => '3507230303000003',
                'password' => Hash::make('anggota_rw'),
                'role' => 'rw',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Ketua RT 001
            [
                'username' => '3507231505850001',
                'password' => Hash::make('anggota_rt'),
                'role' => 'rt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Sekretaris RT 001
            [
                'username' => '3507230606920002',
                'password' => Hash::make('anggota_rt'),
                'role' => 'rt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Ketua RT 002
            [
                'username' => '3507230707880003',
                'password' => Hash::make('anggota_rt'),
                'role' => 'rt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Ketua RT 003
            [
                'username' => '3507230808930004',
                'password' => Hash::make('anggota_rt'),
                'role' => 'rt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Ketua RT 004
            [
                'username' => '3507230404950004',
                'password' => Hash::make('anggota_rt'),
                'role' => 'rt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Warga RT 001
            [
                'username' => '3507231505040001',
                'password' => Hash::make('3507231505040001'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '3507231505040002',
                'password' => Hash::make('3507231505040002'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '3507231010950003',
                'password' => Hash::make('3507231010950003'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '3507231111850004',
                'password' => Hash::make('3507231111850004'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '3507231212900005',
                'password' => Hash::make('3507231212900005'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Warga RT 002
            [
                'username' => '3507231010950001',
                'password' => Hash::make('3507231010950001'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '3507230205920002',
                'password' => Hash::make('3507230205920002'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '3507230808900003',
                'password' => Hash::make('3507230808900003'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '3507230303950004',
                'password' => Hash::make('3507230303950004'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '3507230909850005',
                'password' => Hash::make('3507230909850005'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Warga RT 003
            [
                'username' => '3507231111850001',
                'password' => Hash::make('3507231111850001'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '3507230101900002',
                'password' => Hash::make('3507230101900002'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '3507230202920003',
                'password' => Hash::make('3507230202920003'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '3507230303850004',
                'password' => Hash::make('3507230303850004'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '3507230404980005',
                'password' => Hash::make('3507230404980005'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Warga RT 004
            [
                'username' => '3507230101900006',
                'password' => Hash::make('3507230101900006'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '3507230202920007',
                'password' => Hash::make('3507230202920007'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '3507230303940008',
                'password' => Hash::make('3507230303940008'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '3507230404960009',
                'password' => Hash::make('3507230404960009'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '3507230505980010',
                'password' => Hash::make('3507230505980010'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

