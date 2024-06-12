<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonPenerimaBansosModel extends Model
{
    use HasFactory;

    protected $table = 'calon_penerima_bansos';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id_warga',
        'id_rt',
        'pekerjaan',
        'penghasilan_bulanan',
        'usia',
        'pendidikan',
        'luas_bangunan',
        'jenis_lantai',
        'jenis_dinding',
        'kendaraan',
        'sumber_penerangan',
        'status_kepemilikan_rumah',
        'penerima_bansos',
        'nilai_bansos',
        'ranking_bansos',
    ];

    public function warga()
    {
        return $this->belongsTo(WargaModel::class, 'id_warga', 'id');
    }

    public function rt()
    {
        return $this->belongsTo(RtModel::class, 'id_rt', 'id');
    }
}