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
        'nomor_kk',
    ];
}
