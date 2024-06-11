<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKriteriaBansosModel extends Model
{
    use HasFactory;

    protected $table = 'sub_kriteria_bansos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_kriteria', 
        'nama_sub_kriteria', 
        'kategori_sub_kriteria', 
        'nilai_sub_kriteria'
    ];

    public function kriteria()
    {
        return $this->belongsTo(KriteriaBansosModel::class, 'id_kriteria', 'id');
    }
}