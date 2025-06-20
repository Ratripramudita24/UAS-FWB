<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ruangan_id',
        'tanggal_sewa',
        'status',
        'jumlah_bayar',
        'bukti_pembayaran',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi Many to One ke Ruangan
    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }

}
