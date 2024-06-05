<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rt')->insert([
            ['nama_rt' => '001'],
            ['nama_rt' => '002'],
            ['nama_rt' => '003'],
            ['nama_rt' => '004'],
        ]);
    }
}
