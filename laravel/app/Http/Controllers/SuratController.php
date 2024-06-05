<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratController extends Controller
{
    // WARGA
    // PAGE AJUKAN SURAT
    public function ajukan_surat_index($role) {
        return view('form.surat.ajukan-surat', [
            'dir' => "templates", 
            'css' => 'form', 
            'title' => "Ajukan Surat", 
            'role' => $role,
            'route' => 'ajukan_surat',
            'pages' => 'surat',
            'id' => null
        ]);
    }

    // PAGE DETAIL SURAT
    public function detail_surat() {
        return view('form.surat.detail-surat', [
            'dir' => "templates", 
            'css' => 'detail', 
            'title' => "Detail Surat", 
            'role' => 'warga',
            'pages' => 'surat'
        ]);
    }

    // RT
    // VERIFIKASI SURAT
    public function verifikasi_surat() {
        return view('form.surat.verifikasi-surat', [
            'dir' => "templates", 
            'css' => 'detail', 
            'title' => "Verifikasi Surat", 
            'role' => 'rt',
            'route' => 'verifikasi',
            'pages' => 'surat'
        ]);
    }
}
