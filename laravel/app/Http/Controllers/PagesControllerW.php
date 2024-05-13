<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PagesControllerW extends Controller
{
    public function index()
    {
        return view('warga.indexwarga', [
            "title" => "Dashboard"
        ]);
    }

    public function dashboard()
    {
        return view('warga.dashboardw', [
            "title" => "Dashboard"
        ]);
    }

    public function keuanganw()
    {
        return view('warga.keuanganw', [
            "title" => "keuanganw"
        ]);
    }
}
