<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fasilitas')->insert([
            [
                'nama_fasilitas' => 'AC',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'nama_fasilitas' => 'Proyektor',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'nama_fasilitas' => 'Papan Tulis',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'nama_fasilitas' => 'Meja dan Kursi',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'nama_fasilitas' => 'Sound System',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
        ]);
    }
}
