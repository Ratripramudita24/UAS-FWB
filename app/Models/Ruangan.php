<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;

    protected $table = 'ruangan'; // Nama tabel

    protected $fillable = [
        'nomor_kamar',
        'gedung',
        'kapasitas',
        'harga_sewa',
        'status',
    ];
    public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class, 'fasilitas_ruangan', 'ruangan_id', 'fasilitas_id');
    }

}
