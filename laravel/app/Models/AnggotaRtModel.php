<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaRtModel extends Model
{
    use HasFactory;
    protected $table = "anggota_rt";
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id_warga',
        'id_rt',
        'id_jabatan',
        'foto_profil',
        'periode',
    ];

    public function warga()
    {
        return $this->belongsTo(WargaModel::class, 'id_warga', 'id');
    }

    public function rt()
    {
        return $this->belongsTo(RtModel::class, 'id_rt', 'id');
    }

    public function jabatan()
    {
        return $this->belongsTo(JabatanModel::class, 'id_jabatan', 'id');
    }
}


