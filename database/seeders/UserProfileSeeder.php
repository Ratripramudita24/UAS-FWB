<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_profile')->insert([
            [
                'user_id'     => 1, // Sesuaikan dengan ID dari UserSeeder
                'alamat'      => 'Jl. Merdeka No. 1',
                'no_telepon'  => '081234567890',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'user_id'     => 2,
                'alamat'      => 'Jl. Veteran No. 12',
                'no_telepon'  => '082345678901',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'user_id'     => 3,
                'alamat'      => 'Jl. Pendidikan No. 8',
                'no_telepon'  => '083456789012',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
