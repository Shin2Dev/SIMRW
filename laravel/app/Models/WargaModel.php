<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WargaModel extends Model
{
    use HasFactory;

    protected $table = 'warga';
    protected $primary_key = 'id_warga';

    protected $fillable = [
        'id_warga',
        'nama', 
        'nik', 
        'alamat', 
        'jenis_kelamin', 
        'tempat_lahir',
        'tanggal_lahir', 
        'no_hp', 
        'status_kawin', 
        'pekerjaan',
        'status_warga'
    ];

    protected $attributes = [
        'tempat_lahir' => 'Malang',
        'pekerjaan' => 'pelajar',
        'status_warga' => true
    ];
}
