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

    public function infow()
    {
        return view('warga.infow', [
            "title" => "info"
        ]);
    }

    public function suratw()
    {
        return view('warga.suratw', [
            "title" => "surat"
        ]);
    }

    public function ajukansurat()
    {
        return view('warga.ajukansurat', [
            "title" => "ajukansurat"
        ]);
    }

    public function ajukansurat2()
    {
        return view('warga.ajukansurat2', [
            "title" => "ajukansurat"
        ]);
    }

    public function detailsuratw()
    {
        return view('warga.detailsuratw', [
            "title" => "detailsurat"
        ]);
    }

    public function datawargaw()
    {
        return view('warga.datawargaw', [
            "title" => "datawargaw"
        ]);
    }
}
