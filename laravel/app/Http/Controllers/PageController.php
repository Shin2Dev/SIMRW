<?php

namespace App\Http\Controllers;

use App\Models\InformasiModel;
use App\Models\KategoriInfoModel;
use App\Models\KeuanganModel;
// use App\Models\User;

use App\Models\WargaModel;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    // DASHBOARD
    public function index($role){
        $keuangan = KeuanganModel::orderBy('tanggal', 'desc')->take(3)->get();
        $infos = InformasiModel::where('status', 'publik')->orderBy('tanggal', 'asc')->take(2)->get();
        
        return view('page.index', [
            'dir' => "pages", 
            'css' => 'dashboard-page', 
            'title' => "Dashboard", 
            'role' => $role,
        ], compact('infos', 'keuangan'));
    }

    // PROFIL
    public function profil($role){
        $warga = WargaModel::where('nik', Auth::id())->first();

        return view('page.profil', [
            'dir' => "pages", 
            'css' => 'profil-page', 
            'title' => "Profil", 
            'role' => $role,
        ], compact('warga'));
    }
    
    // SURAT
    public function surat($role){
        return view(
            'page.surat', 
            [
                'dir' => "pages", 
                'css' => 'surat-page', 
                'title' => "Surat", 
                'role' => $role,
            ]
        );
    }

    // BANTUAN SOSIAL
    public function bantuan_sosial($role){
        return view(
            'page.bantuan_sosial', 
            [
                'dir' => "pages", 
                'css' => 'bantuan-sosial', 
                'title' => "Bantuan Sosial", 
                'role' => $role,
            ]
        );
    }

    // KEUANGAN
    public function keuangan($role){
        $keuangan = KeuanganModel::orderBy('tanggal', 'desc')->paginate(10);
        return view(
            'page.keuangan', 
            [
                'dir' => "pages", 
                'css' => 'keuangan-page', 
                'title' => "Keuangan", 
                'role' => $role,
            ],
            compact('keuangan')
        );
    }

    // INFORMASI KEGIATAN
    public function info($role){
        if ($role == 'rt') {
            $infos = InformasiModel::where('status', 'publik')->orWhere('status', 'draf')->paginate(4);
        } else {
            $infos = InformasiModel::where('status', 'publik')->paginate(4);
        }
        $kategoriInfos = KategoriInfoModel::all();
        
        return view
        (
            'page.info', 
            [
                'dir' => "pages", 
                'css' => 'info-page', 
                'title' => "Informasi Kegiatan", 
                'role' => $role,
            ], 
            compact('infos', 'kategoriInfos')
        );
    }

    // DATA WARGA
    public function data_warga($role){
        $wargas = WargaModel::paginate(10);
        return view('page.data_warga', [
            'dir' => "pages", 
            'css' => 'data-warga', 
            'title' => "Data Warga", 
            'role' => $role,
        ], compact('wargas'));
    }

    // DATA KELUARGA
    public function data_keluarga($role){
        return view('page.data_keluarga', [
            'dir' => "pages", 
            'css' => 'data-keluarga', 
            'title' => "Data Keluarga", 
            'role' => $role,
        ]);
    }
}
