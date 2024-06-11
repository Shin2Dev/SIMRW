<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanModel extends Model
{
    use HasFactory;
    protected $table = "jabatan";
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_jabatan',
    ];
}
