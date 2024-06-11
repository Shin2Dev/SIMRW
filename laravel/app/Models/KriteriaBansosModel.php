<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaBansosModel extends Model
{
    protected $table = 'kriteria_bansos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'kode_kriteria',
        'nama_kriteria',
        'atribut'
    ];
}
