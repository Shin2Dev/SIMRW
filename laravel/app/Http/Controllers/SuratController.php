<?php

namespace App\Http\Controllers;

use App\Models\JenisSuratModel;
use App\Models\SuratModel;
use App\Models\WargaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratController extends Controller
{
    // WARGA
    // PAGE AJUKAN SURAT
    public function ajukan_surat_index($role) {
        $user = Auth::user();
        $warga = WargaModel::where('nik', $user->username)->first();
        $jenis_surats = JenisSuratModel::all();

        return view('form.surat.ajukan-surat', [
            'dir' => "templates", 
            'css' => 'form', 
            'title' => "Ajukan Surat", 
            'role' => $role,
            'route' => 'ajukan_surat',
            'pages' => 'surat',
            'id' => null
        ], compact('warga', 'jenis_surats'));
    }

    public function ajukan_surat($role, Request $request){
        $warga = WargaModel::where('nama', $request->nama)->first();
        if($warga){
            $surat = new SuratModel;
            $surat->id_warga = $warga->id;
            $surat->id_rt = $warga->rt->id;
            $surat->id_jenis_surat = JenisSuratModel::where('nama_jenis_surat', $request->jenis_surat)->first()->id;
            $surat->status_surat = 'Dalam Proses';
            $surat->keperluan_surat = $request->input('keperluan');
            $surat->save();
            return redirect()->route('surat', ['role' => $role])->with('success', 'Surat berhasil diajukan');
        } else {
            return redirect()->route('surat', ['role' => $role])->with('error', 'Warga tidak ditemukan');
        }
    }

    // PAGE DETAIL SURAT
    public function detail_surat($role, $id) {
        $surat = SuratModel::find($id);
        return view('form.surat.detail-surat', [
            'dir' => "templates", 
            'css' => 'detail', 
            'title' => "Detail Surat", 
            'role' => $role,
            'pages' => 'surat',
            'id' => $id
        ], compact('surat'));
    }

    // RT
    // VERIFIKASI SURAT
    public function verifikasi_surat($role, $id) {
        $surat = SuratModel::find($id);
        return view('form.surat.verifikasi-surat', [
            'dir' => "templates", 
            'css' => 'form', 
            'title' => "Verifikasi Surat", 
            'role' => $role,
            'route' => 'verifikasi',
            'pages' => 'surat',
            'id' => $id
        ], compact('surat'));
    }

    public function verifikasi($role, $id, Request $request){
        $surat = SuratModel::find($id);
        if($surat){
            if($request->input('status') == 'Disetujui'){
                $surat->status_surat = 'Disetujui';
                $surat->nomor_surat = 'RT' . $surat->rt->nama_rt . '/' . str_pad($surat->id, 3, '0', STR_PAD_LEFT) . '/' . date('m/Y');
            } elseif($request->input('status') == 'Ditolak'){
                $surat->status_surat = 'Ditolak';
            }
            $surat->save();
            if ($surat->status_surat == 'Disetujui'){
                return redirect()->route('surat', ['role' => $role])->with('success', 'Surat berhasil diverifikasi');
            } else {
                return redirect()->route('surat', ['role' => $role])->with('success', 'Surat berhasil ditolak');
            }
        } else {
            return redirect()->route('surat', ['role' => $role])->with('error', 'Surat tidak ditemukan');
        }
    }

    public function cetak_surat($role, $id){
        $surat = SuratModel::find($id);
        return view('surat.surat_keterangan', [
            'dir' => "templates", 
            'css' => 'surat', 
            'title' => "Cetak Surat", 
            'role' => $role,
            'id' => $id
        ], compact('surat'));
    }
}
