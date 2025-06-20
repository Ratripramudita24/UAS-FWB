<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;

    protected $table = 'ruangans'; // Nama tabel

    protected $fillable = [
        'nomor_kamar',
        'gedung',
        'kapasitas',
        'harga_sewa',
        'status',
    ];
    // Relasi One to Many ke Sewa
    public function sewa()
    {
        return $this->hasMany(Sewa::class);
    }

    // Relasi Many to Many ke Favorit melalui tabel pivot 
    public function pivot()
    {
        return $this->hasMany(Favorit::class, 'ruangan_id', 'user_id')
        ->withTimestamps();
    }
}
