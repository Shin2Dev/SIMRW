<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllerRT extends Controller
{
    public function index()
    {
        return view('rt.indexrt', [
            "title" => "Dashboard"
        ]);
    }

    public function dashboardrt()
    {
        return view('rt.dashboardrt', [
            "title" => "Dashboard"
        ]);
    }

    public function landing()
    {
        return view('landing', [
            "title" => "landing"
        ]);
    }

    public function surat()
    {
        return view('rt.surat', [
            "title" => "surat"
        ]);
    }

    public function detailsurat()
    {
        return view('rt.detailsurat', [
            "title" => "detailsurat"
        ]);
    }

    public function keuangan()
    {
        return view('rt.keuangan', [
            "title" => "keuangan"
        ]);
    }

    public function tambahuang()
    {
        return view('rt.tambahuang', [
            "title" => "tambahuang"
        ]);
    }

    public function info()
    {
        return view('rt.info', [
            "title" => "info"
        ]);
    }

    public function tambahinfo()
    {
        return view('rt.tambahinfo', [
            "title" => "tambahinfo"
        ]);
    }

    public function datawargart()
    {
        return view('rt.datawargart', [
            "title" => "datawargart"
        ]);
    }

    public function tambahwarga()
    {
        return view('rt.tambahwarga', [
            "title" => "tambahwarga"
        ]);
    }

    public function editwarga()
    {
        return view('rt.editwarga', [
            "title" => "editwarga"
        ]);
    }

    public function gantistatus()
    {
        return view('rt.gantistatus', [
            "title" => "gantistatus"
        ]);
    }

    public function detailstatus()
    {
        return view('rt.detailstatus', [
            "title" => "detailstatus"
        ]);
    }
}
