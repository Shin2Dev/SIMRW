<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiModel extends Model
{
    use HasFactory;

    protected $table = 'informasi';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'judul_info',
        'id_kategori_info',
        'id_rt',
        'deskripsi_info',
        'tanggal_info',
        'tempat_info',
        'status_info',
        'gambar_info'
    ];
    
    public function kategori_info()
    {
        return $this->belongsTo(KategoriInfoModel::class, 'id_kategori_info', 'id');
    }

    public function rt()
    {
        return $this->belongsTo(RtModel::class, 'id_rt', 'id');
    }
}
