<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'      => 'Admin',
                'email'     => 'admin@example.com',
                'password'  => Hash::make('admin123'), // Pastikan terenkripsi
                'Role'      => 'admin',
                'NIM'       => null,
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name'      => 'Staf',
                'email'     => 'staf@example.com',
                'password'  => Hash::make('staf123'),
                'Role'      => 'staf',
                'NIM'       => null,
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name'      => 'Mahasiswa',
                'email'     => 'mahasiswa@example.com',
                'password'  => Hash::make('mahasiswa123'),
                'Role'      => 'mahasiswa',
                'NIM'       => '1234567890',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ]);
    }
}
