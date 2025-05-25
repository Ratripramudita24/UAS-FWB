<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';

    protected $fillable = [
        'nama_fasilitas',
    ];
    public function ruangan()
{
    return $this->belongsToMany(Ruangan::class, 'fasilitas_ruangan', 'fasilitas_id', 'ruangan_id');
}

}
