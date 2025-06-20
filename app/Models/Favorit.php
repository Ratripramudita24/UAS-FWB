<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorit extends Model
{
    protected $table = 'pivots';
    protected $fillable = [
        'user_id',
        'ruangan_id',
        // tambahkan field lain jika ada
    ];
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function ruangan(){
        return $this->belongsTo(Ruangan::class, 'ruangan_id', 'id');
    }
}
