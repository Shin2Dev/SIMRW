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
            [
                'username' => '1234567890123456',
                'password' => Hash::make('1234567890123456'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '2345678901234567',
                'password' => Hash::make('2345678901234567'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '3456789012345678',
                'password' => Hash::make('3456789012345678'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '4567890123456789',
                'password' => Hash::make('4567890123456789'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '5678901234567890',
                'password' => Hash::make('5678901234567890'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '6789012345678901',
                'password' => Hash::make('6789012345678901'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '7890123456789012',
                'password' => Hash::make('7890123456789012'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '8901234567890123',
                'password' => Hash::make('8901234567890123'),
                'role' => 'warga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '191505040001',
                'password' => Hash::make('191505040001'),
                'role' => 'rt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => '200405040001',
                'password' => Hash::make('200405040001'),
                'role' => 'rw',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
