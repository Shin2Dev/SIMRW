<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeuanganModel extends Model
{
    use HasFactory;

    protected $table = 'keuangan';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id_rt',
        'tanggal',
        'deskripsi',
        'jenis',
        'jumlah',
        'saldo',
    ];

    public function getFormattedDateAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['tanggal'])->format('d-m-Y');
    }

    public function rt()
    {
        return $this->belongsTo(RtModel::class, 'id_rt', 'id');
    }
}