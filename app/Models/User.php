<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Kolom yang dapat diisi (fillable).
     */
    protected $fillable = [
        'name',
        'email',
        'Password',
        'Role',
        'NIM',
        'email',
    ];

    /**
     * Kolom yang disembunyikan saat model diubah ke array atau JSON.
     */
    protected $hidden = [
        'Password',
        'remember_token',
    ];

    /**
     * Casting kolom ke tipe data tertentu.
     */
    protected $casts = [
        'email' => 'datetime',
    ];
    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

}
