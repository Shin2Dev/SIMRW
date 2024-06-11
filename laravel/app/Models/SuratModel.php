<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratModel extends Model
{
    use HasFactory;

    protected $table = 'surat';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id_warga',
        'id_rt',
        'id_jenis_surat',
        'id_anggota_rt',
        // 'id_anggota_rw',
        'nomor_surat',
        'keperluan_surat',
        'status_surat',
    ];

    public function warga()
    {
        return $this->belongsTo(WargaModel::class, 'id_warga', 'id');
    }

    public function jenis_surat()
    {
        return $this->belongsTo(JenisSuratModel::class, 'id_jenis_surat', 'id');
    }

    public function ketua_rt()
    {
        return $this->belongsTo(AnggotaRtModel::class, 'id_anggota_rt', 'id');
    }

    // public function ketua_rw()
    // {
    //     return $this->belongsTo(AnggotaRwModel::class, 'id_anggota_rw', 'id');
    // }

    public function rt(){
        return $this->belongsTo(RtModel::class, 'id_rt', 'id');
    }
}
