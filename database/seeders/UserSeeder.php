<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'      => 'Admin',
                'Email'     => 'admin@example.com',
                'Password'  => 'admin123', // Pastikan terenkripsi
                'Role'      => 'admin',
                'NIM'       => null,
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name'      => 'Staf',
                'Email'     => 'staf@example.com',
                'Password'  => 'staf123',
                'Role'      => 'staf',
                'NIM'       => null,
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name'      => 'Mahasiswa',
                'Email'     => 'mahasiswa@example.com',
                'Password'  => 'mahasiswa123',
                'Role'      => 'mahasiswa',
                'NIM'       => '1234567890',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ]);
    }
}
