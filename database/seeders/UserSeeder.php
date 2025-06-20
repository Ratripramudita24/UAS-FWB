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
                'role'      => 'admin',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name'      => 'Staf',
                'email'     => 'staf@example.com',
                'password'  => Hash::make('staf123'),
                'role'      => 'staf',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ]);
    }
}
