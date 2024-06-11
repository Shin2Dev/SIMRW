<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WargaModel extends Model
{
    use HasFactory;

    protected $table = 'warga';
    protected $primaryKey = 'id';
    public $timestamps = true;

    // PERBAIKAN
    protected $fillable = [
        // 'id',
        'nik',
        'nama',
        'id_rt',
        'id_keluarga',
        'rw',
        'jenis_kelamin',
        'golongan_darah',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat_ktp',
        'alamat_domisili',
        'no_hp',
        'agama',
        'pekerjaan',
        'status_kawin',
        'gambar_ktp',
        'status_warga',
        'catatan_status',
        'status_keluarga',
    ];

    public function rt()
    {
        return $this->belongsTo(RtModel::class, 'id_rt', 'id');
    }

    public function keluarga()
    {
        return $this->belongsTo(KeluargaModel::class, 'id_keluarga', 'id');
    }
}
