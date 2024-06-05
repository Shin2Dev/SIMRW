<?php

namespace App\Http\Controllers;

use App\Models\KeuanganModel;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function tambah_uang_index($role){
        // Mengambil data terakhir dari model Keuangan
        $lastKeuangan = KeuanganModel::orderBy('tanggal', 'desc')->first();

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
            compact('lastKeuangan')
        );    
    }

    public function tambah_uang($role, Request $request){
        // Mengubah format jumlah dari rupiah ke decimal
        $request->merge([
            'jumlah' => str_replace(['Rp. ', '.', ','], ['', '', '.'], $request->input('jumlah'))
        ]);

        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'deskripsi' => 'required|string|max:255',
            'jenis' => 'required|in:Pemasukan,Pengeluaran',
            'jumlah' => 'required|numeric',
        ]);

        $lastKeuangan = KeuanganModel::orderBy('tanggal', 'desc')->first();
        $saldo = $lastKeuangan ? $lastKeuangan->saldo : 0;

        if ($validatedData['jenis'] == 'keluar') {
            $saldo -= $validatedData['jumlah'];
        } else {
            $saldo += $validatedData['jumlah'];
        }

        KeuanganModel::create([
            'tanggal' => $validatedData['tanggal'],
            'deskripsi' => $validatedData['deskripsi'],
            'jenis' => $validatedData['jenis'],
            'jumlah' => $validatedData['jumlah'],
            'saldo' => $saldo,
        ]);

        return redirect()->route('keuangan', ['role' => $role])->with('success', 'Laporan keuangan berhasil ditambahkan.');
    }
};