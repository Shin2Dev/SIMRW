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
        'judul',
        'id_kategori',
        'id_rt',
        'deskripsi',
        'tanggal',
        'tempat',
        'status',
        'gambar'
    ];
    
    public function kategori_info()
    {
        return $this->belongsTo(KategoriInfoModel::class, 'id_kategori', 'id');
    }

    public function rt()
    {
        return $this->belongsTo(RtModel::class, 'id_rt', 'id');
    }
}
