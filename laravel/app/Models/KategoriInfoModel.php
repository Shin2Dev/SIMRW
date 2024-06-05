<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriInfoModel extends Model
{
    use HasFactory;

    protected $table = 'kategori_info';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_kategori'
    ];
}
