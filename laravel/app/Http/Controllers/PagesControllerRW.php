<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllerRW extends Controller
{
    public function index()
    {
        return view('rw.index', [
            "title" => "Dashboard"
        ]);
    }

    public function dashboard()
    {
        return view('rw.dashboard', [
            "title" => "Dashboard"
        ]);
    }

    public function keuanganrw()
    {
        return view('rw.keuanganrw', [
            "title" => "keuangan"
        ]);
    }

    public function inforw()
    {
        return view('rw.inforw', [
            "title" => "inforw"
        ]);
    }
}
