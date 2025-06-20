<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'alamat',
        'no_telepon',
    ];

    // Relasi Many to One ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
