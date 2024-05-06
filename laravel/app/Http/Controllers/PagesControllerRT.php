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
}
