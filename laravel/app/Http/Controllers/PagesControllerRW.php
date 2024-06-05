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

    public function datawargarw()
    {
        return view('rw.datawargarw', [
            "title" => "datawargarw"
        ]);
    }

    public function bantuansosialrw()
    {
        return view('rw.bantuansosialrw', [
            "title" => "bantuansosial"
        ]);
    }

    public function bansos_subkriteria()
    {
        return view('rw.bansos_subkriteria', [
            "title" => "bansos_subkriteria"
        ]);
    }

    public function bansos_normalisasi()
    {
        return view('rw.bansos_normalisasi', [
            "title" => "bansos_normalisasi"
        ]);
    }

    public function bansos_perhitungan()
    {
        return view('rw.bansos_perhitungan', [
            "title" => "bansos_perhitungan"
        ]);
    }

    public function bansos_perankingan()
    {
        return view('rw.bansos_perankingan', [
            "title" => "bansos_perankingan"
        ]);
    }
}
