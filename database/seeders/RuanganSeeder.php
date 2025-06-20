<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ruangans')->insert([
            [
                 'nomor_kamar' => 001,
                 'gedung'      => 'A',
                 'kapasitas'   => 2,
                 'harga_sewa'  => 500000.00,
                 'status'      => 'tersedia',
            ],
            [
                'nomor_kamar' => 002,
                 'gedung'      => 'C',
                 'kapasitas'   => 1,
                 'harga_sewa'  => 990000.00,
                 'status'      => 'tersedia',
            ]
        ]);
    }
}
