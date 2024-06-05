<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BansosController extends Controller
{
    public function ajukan_bansos_index($role)
    {
        return view('form.bansos.ajukan-bansos', [
            'dir' => 'templates', 
            'css' => 'form', 
            'title' => 'Ajukan Bansos', 
            'role' => $role,
            'route' => 'ajukan_bansos',
            'pages' => 'bantuan_sosial',
            'id' => null
        ]);
    }

    public function edit_bansos_index($role, $id)
    {
        return view('form.bansos.edit-bansos', [
            'dir' => 'templates', 
            'css' => 'form', 
            'title' => 'Edit Bansos', 
            'role' => $role,
            'route' => 'edit_bansos',
            'pages' => 'bantuan_sosial',
            'id' => $id
        ]);
    }
}
