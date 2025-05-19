<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class FasilitasRuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fasilitas_ruangan')->insert([
            // Ruangan 1 (id = 1) memiliki AC dan Proyektor
            [
                'ruangan_id'   => 1,
                'fasilitas_id' => 1, // AC
            ],
            [
                'ruangan_id'   => 1,
                'fasilitas_id' => 2, // Proyektor
            ],

            // Ruangan 2 (id = 2) memiliki Papan Tulis dan Meja & Kursi
            [
                'ruangan_id'   => 2,
                'fasilitas_id' => 3, // Papan Tulis
            ],
            [
                'ruangan_id'   => 2,
                'fasilitas_id' => 4, // Meja dan Kursi
            ],

            // Ruangan 3 (id = 3) memiliki semua fasilitas
            [
                'ruangan_id'   => 3,
                'fasilitas_id' => 1,
            ],
            [
                'ruangan_id'   => 3,
                'fasilitas_id' => 2,
            ],
            [
                'ruangan_id'   => 3,
                'fasilitas_id' => 3,
            ],
            [
                'ruangan_id'   => 3,
                'fasilitas_id' => 4,
            ],
            [
                'ruangan_id'   => 3,
                'fasilitas_id' => 5,
            ],
        ]);
    }
}
