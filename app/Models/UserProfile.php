<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $table = 'user_profile'; // Nama tabel jika bukan jamak (default Laravel pakai "user_profiles")

    protected $fillable = [
        'user_id',
        'alamat',
        'no_telepon',
    ];

    /**
     * Relasi ke model User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
