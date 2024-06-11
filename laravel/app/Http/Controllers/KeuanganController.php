<?php

namespace App\Http\Controllers;

use App\Models\KeuanganModel;
use App\Models\WargaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeuanganController extends Controller
{
    public function tambah_uang_index($role){
        // Mengambil data terakhir dari model Keuangan
        $user = Auth::user();
        $warga = WargaModel::where('nik', $user->username)->first();
        $lastKeuangan = KeuanganModel::where('id_rt', $warga->rt->id)->orderBy('tanggal_keuangan', 'desc')->first();

        $saldo = $lastKeuangan->saldo ?? 0;

        // Halaman Buat Informasi
        return view
        (
            'form.keuangan.tambah_keuangan', 
            [
                'dir' => "templates", 
                'css' => 'form', 
                'title' => "Tambah Laporan Keuangan", 
                'role' => $role,
                'route' => 'tambah_uang',
                'pages' => 'keuangan',
                'id' => null,
            ],
            compact('lastKeuangan', 'warga', 'saldo')
        );    
    }
    public function tambah_uang($role, Request $request){
        $user = Auth::user();
        $warga = WargaModel::where('nik', $user->username)->first();
        
        // Mengubah format jumlah dari rupiah ke decimal
        $request->merge([
            'jumlah' => str_replace(['Rp. ', '.', ','], ['', '', '.'], $request->input('jumlah'))
        ]);

        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'rt' => 'required|exists:rt,id',
            'deskripsi' => 'required|string|max:255',
            'jenis' => 'required|in:Pemasukan,Pengeluaran',
            'jumlah' => 'required|numeric',
        ]);

        $lastKeuangan = KeuanganModel::where('id_rt', $warga->rt->id)->orderBy('tanggal_keuangan', 'desc')->first();
        $saldo = $lastKeuangan ? $lastKeuangan->saldo : 0;

        if ($validatedData['jenis'] == 'Pengeluaran') {
            $saldo -= $validatedData['jumlah'];
        } else {
            $saldo += $validatedData['jumlah'];
        }

        KeuanganModel::create([
            'tanggal_keuangan' => $validatedData['tanggal'],
            'id_rt' => $validatedData['rt'],
            'deskripsi_keuangan' => $validatedData['deskripsi'],
            'jenis_keuangan' => $validatedData['jenis'],
            'jumlah_keuangan' => $validatedData['jumlah'],
            'saldo' => $saldo,
        ]);

        return redirect()->route('keuangan', ['role' => $role])->with('success', 'Laporan keuangan berhasil ditambahkan.');
    }

    public function hapus_uang($role, $id){
        $lastKeuangan = KeuanganModel::orderBy('tanggal_keuangan', 'desc')->first();
        if ($lastKeuangan->id != $id) {
            return redirect()->back()->with('error', 'Data tidak dapat dihapus sebelum data terakhir dihapus.');
        }
        
        KeuanganModel::destroy($id);
        return redirect()->route('keuangan', ['role' => $role])->with('success', 'Laporan keuangan berhasil dihapus.');
    }
}
