<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaRwModel extends Model
{
    use HasFactory;

    protected $table = 'anggota_rw';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id_warga',
        'id_jabatan',
        'foto_profil',
        'periode',
    ];

    public function warga()
    {
        return $this->belongsTo(WargaModel::class, 'id_warga', 'id');
    }

    public function jabatan()
    {
        return $this->belongsTo(JabatanModel::class, 'id_jabatan', 'id');
    }
}