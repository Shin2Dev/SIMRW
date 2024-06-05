<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataKeluarga extends Controller
{
    public function tambah_keluarga_index($role){
        return view('form.data-keluarga.tambah-keluarga', [
            'dir' => 'templates', 
            'css' => 'form', 
            'title' => 'Tambah Data Keluarga', 
            'role' => $role,
            'route' => 'tambah_keluarga',
            'pages' => 'data_keluarga',
            'id' => null
        ]);
    }
}
