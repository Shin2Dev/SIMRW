<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username',
        'password',
        'role'
    ];

    protected $hidden = [
        'password', // Menyembunyikan kolom password saat data pengguna diambil
        'remember_token'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    
    // Jika kolom id yang merupakan kunci primer di tabel users, 
    // maka tidak perlu mendefinisikan fungsi getAuthIdentifier() dan getAuthPassword()

    // public function getAuthIdentifier()
    // {
    //     return $this->username;
    // }

    // public function getAuthPassword()
    // {
    //     return $this->password;
    // }
}
