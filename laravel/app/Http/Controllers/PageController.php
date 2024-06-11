<?php

namespace App\Http\Controllers;

use App\Models\AnggotaRtModel;
use App\Models\AnggotaRwModel;
use App\Models\CalonPenerimaBansosModel;
use App\Models\InformasiModel;
use App\Models\KategoriInfoModel;
use App\Models\KeluargaModel;
use App\Models\KeuanganModel;
use App\Models\KriteriaBansosModel;
use App\Models\RtModel;
use App\Models\SubKriteriaBansosModel;
use App\Models\SuratModel;
// use App\Models\User;

use App\Models\WargaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    // DASHBOARD
    public function index($role){
        $user = Auth::user();
        $warga = WargaModel::where('nik', $user->username)->first();
        $data_warga = WargaModel::all();

        if ($role == 'rw'){
            $keuangan = KeuanganModel::orderBy('tanggal_keuangan', 'desc')->take(3)->get();
            $infos = InformasiModel::where('status_info', 'publik')->orderBy('tanggal_info', 'asc')->take(2)->get();
        } else {
            $keuangan = KeuanganModel::where('id_rt', $warga->rt->id)->orderBy('tanggal_keuangan', 'desc')->take(3)->get();
            $infos = InformasiModel::where('status_info', 'publik')->where('id_rt', $warga->rt->id)->orderBy('tanggal_info', 'asc')->take(2)->get();
        }

        // $infos = InformasiModel::where('status_info', 'publik')->orderBy('tanggal_info', 'asc')->take(2)->get();
        
        return view('page.index', [
            'dir' => "pages", 
            'css' => 'dashboard-page', 
            'title' => "Dashboard", 
            'role' => $role,
        ], compact('infos', 'keuangan', 'warga', 'data_warga'));
    }

    // PROFIL
    public function profil(Request $request, $role){
        $user = Auth::user();
        $warga = WargaModel::where('nik', $user->username)->first();

        return view('page.profil', [
            'dir' => "pages", 
            'css' => 'profil-page', 
            'title' => "Profil", 
            'role' => $role,
        ], compact('warga'));
    }
    
    // SURAT
    public function surat($role){
        $user = Auth::user();
        $warga = WargaModel::where('nik', $user->username)->first();
        
        if ($role == 'warga'){
            $surats = SuratModel::where('id_warga', $warga->id)->get();
        } else if($role == 'rt') {
            $surats = SuratModel::where('id_rt', $warga->rt->nama_rt)->get();
        } else {
            $surats = SuratModel::all();
        }

        return view(
            'page.surat', 
            [
                'dir' => "pages", 
                'css' => 'surat-page', 
                'title' => "Surat", 
                'role' => $role,
            ], compact('surats')
        );
    }

    // BANTUAN SOSIAL
    public function bantuan_sosial($role){
        $user = Auth::user();
        $warga = WargaModel::where('nik', $user->username)->first();

        $kriteria_bansos = KriteriaBansosModel::all();
        $sub_kriteria_bansos = SubKriteriaBansosModel::all();
        if ($role != 'rt'){
            $calon_penerima_bansos = CalonPenerimaBansosModel::all();
        } else {
            $calon_penerima_bansos = CalonPenerimaBansosModel::where('id_rt', $warga->id_rt)->paginate(10);
        }

        return view(
            'page.bantuan_sosial', 
            [
                'dir' => "pages", 
                'css' => 'bantuan-sosial', 
                'title' => "Bantuan Sosial", 
                'role' => $role,
            ], compact('kriteria_bansos', 'sub_kriteria_bansos', 'calon_penerima_bansos')
        );
    }

    // KEUANGAN
    public function keuangan($role){
        $user = Auth::user();
        $warga = WargaModel::where('nik', $user->username)->first();
        $rt = RtModel::all();

        if ($role == 'rw'){
            $keuangan = KeuanganModel::orderBy('tanggal_keuangan', 'desc')->paginate(10);
        } else {
            $keuangan = KeuanganModel::where('id_rt', $warga->rt->id)->orderBy('tanggal_keuangan', 'desc')->paginate(10);
        }

        return view(
            'page.keuangan', 
            [
                'dir' => "pages", 
                'css' => 'keuangan-page', 
                'title' => "Keuangan", 
                'role' => $role,
            ],
            compact('keuangan', 'rt')
        );
    }

    // INFORMASI KEGIATAN
    public function info($role){
        $user = Auth::user();
        $warga = WargaModel::where('nik', $user->username)->first();

        if ($role == 'rw'){
            $infos = InformasiModel::where('status_info', 'Publik')->paginate(4);
        } else if ($role == 'rt') {
            $infos = InformasiModel::where('status_info', 'Publik')->where('id_rt', $warga->rt->id)->orWhere('status_info', 'Draf')->where('id_rt', $warga->rt->id)->paginate(4);
        } else {
            $infos = InformasiModel::where('status_info', 'publik')->where('id_rt', $warga->rt->id)->paginate(4);
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
        $user = Auth::user();
        $warga = WargaModel::where('nik', $user->username)->first();

        if ($role == 'rw'){
            $wargas = WargaModel::paginate(10);
        } else {
            $wargas = WargaModel::where('id_rt', $warga->rt->id)->paginate(10);
        }

        return view('page.data_warga', [
            'dir' => "pages", 
            'css' => 'data-warga', 
            'title' => "Data Warga", 
            'role' => $role,
        ], compact('wargas'));
    }

    // DATA KELUARGA
    public function data_keluarga($role){
        $user = Auth::user();
        $warga = WargaModel::where('nik', $user->username)->first();

        if ($role == 'rw'){
            $keluargas = KeluargaModel::paginate(10);
        } else {
            $keluargas = KeluargaModel::where('id_rt', $warga->rt->id)->paginate(10);
        }

        return view('page.data_keluarga', [
            'dir' => "pages", 
            'css' => 'data-keluarga', 
            'title' => "Data Keluarga", 
            'role' => $role,
        ], compact('keluargas'));
    }

    // DATA RT
    public function data_rt($role){
        $data_rt = AnggotaRtModel::all();
        return view('page.data_rt', [
            'dir' => "pages", 
            'css' => 'data-anggota', 
            'title' => "Data RT", 
            'role' => $role,
        ], compact('data_rt'));
    }

    // DATA RT
    public function data_rw($role){
        $data_rw = AnggotaRwModel::all();
        return view('page.data_rw', [
            'dir' => "pages", 
            'css' => 'data-anggota', 
            'title' => "Data RW", 
            'role' => $role,
        ], compact('data_rw'));
    }
}
