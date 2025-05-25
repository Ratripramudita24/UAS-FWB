<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class FasilitasRuangan extends Pivot
{
    // Jika tabel pivot memiliki timestamps, aktifkan properti ini
    public $timestamps = false;

    protected $table = 'fasilitas_ruangan';

    protected $fillable = [
        'ruangan_id',
        'fasilitas_id',
    ];
}
