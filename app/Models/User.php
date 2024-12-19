<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable; // Menambahkan fitur notifikasi jika dibutuhkan

    /**
     * Attributes that are mass assignable.
     */
    protected $fillable = ['name', 'email', 'password', 'role']; // Tambahkan 'role' jika menggunakan role

    /**
     * Attributes that should be hidden for arrays.
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Attributes that should be cast.
     */
    protected $casts = [
        'email_verified_at' => 'datetime', // Jika menggunakan verifikasi email
    ];

    /**
     * Check if the user is an admin.
     */
    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
