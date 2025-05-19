<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ruangan')->insert([
            [
                'nomor_kamar' => 101,
                'gedung'      => 'Gedung A',
                'kapasitas'   => 2,
                'harga_sewa'  => 500000.00,
                'status'      => 'tersedia',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'nomor_kamar' => 202,
                'gedung'      => 'Gedung B',
                'kapasitas'   => 3,
                'harga_sewa'  => 750000.00,
                'status'      => 'tidak_tersedia',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'nomor_kamar' => 303,
                'gedung'      => 'Gedung C',
                'kapasitas'   => 1,
                'harga_sewa'  => 1000000.00,
                'status'      => 'tersedia',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
