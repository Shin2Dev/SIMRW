<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaModel extends Model
{
    use HasFactory;

    protected $table = 'keluarga';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id_rt', 'nomor_kk', 'gambar_kk'
    ];

    public function warga()
    {
        return $this->hasMany(WargaModel::class, 'id_keluarga', 'id');
    }

    public function kepalaKeluarga()
    {
        return $this->hasOne(WargaModel::class, 'id_keluarga', 'id')->where('status_keluarga', 'Kepala Keluarga');
    }
}