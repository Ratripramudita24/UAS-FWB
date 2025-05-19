<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class SewaSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('sewa')->insert([
            [
                'user_id'           => 1,
                'ruangan_id'        => 1,
                'tanggal_sewa'      => now()->addDays(2)->format('Y-m-d'),
                'status'            => 'pending',
                'jumlah_bayar'      => 300000.00,
                'bukti_pembayaran'  => 'GHT12345678',
                'tanggal_bayar'     => now()->format('Y-m-d'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'user_id'           => 2,
                'ruangan_id'        => 2,
                'tanggal_sewa'      => now()->addDays(3)->format('Y-m-d'),
                'status'            => 'disetujui',
                'jumlah_bayar'      => 450000.00,
                'bukti_pembayaran'  => 'KLM12345678',
                'tanggal_bayar'     => now()->format('Y-m-d'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'user_id'           => 3,
                'ruangan_id'        => 3,
                'tanggal_sewa'      => now()->addDays(1)->format('Y-m-d'),
                'status'            => 'ditolak',
                'jumlah_bayar'      => 250000.00,
                'bukti_pembayaran'  => 'po12345678',
                'tanggal_bayar'     => now()->format('Y-m-d'),
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
        ]);
    }
}
