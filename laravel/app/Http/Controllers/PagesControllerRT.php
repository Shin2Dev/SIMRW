<?php

namespace App\Http\Controllers;

use App\Models\WargaModel;
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

    // DATA WARGA
    public function datawargart()
    {
        $warga = WargaModel::all();
        return view('rt.datawargart', compact('warga'), [
            "title" => "datawargart"
        ]);
    }

    // Tambah Warga
    public function tambahwarga()
    {
        return view('rt.tambahwarga', [
            "title" => "tambahwarga"
        ]);
    }

    public function tambah(Request $request)
    {
        // Validasi data yang diterima
        $validatedData = $request -> validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:16',
            'alamat' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:10',
            // 'tempat_lahir' => 'sometimes|string|max:255',
            'tanggal_lahir' => 'required|date',
            'no_hp' => 'required|string|max:15',
            'status_kawin' => 'required|boolean',
            // 'pekerjaan' => 'required|string|max:255',
            // 'status_warga' => 'required|boolean'
        ]);

        // Buat data warga baru
        WargaModel::create($validatedData);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('pages.datawargart')->with('success', 'Data warga berhasil ditambahkan.');
    }

    // Edit Warga
    public function editwarga($id)
    {
        $warga = WargaModel::findOrFail($id);
        return view('rt.editwarga', compact('warga'), [
            "title" => "editwarga"
        ]);
    }

    // UPDATE DATA WARGA EDIT
    public function update(Request $request, $id)
    {
        $warga = WargaModel::findOrFail($id);

        $validatedData = $request->validate([
            'nama' => 'sometimes|string|max:255',
            'nik' => 'sometimes|string|max:16',
            'alamat' => 'sometimes|string|max:255',
            'jenis_kelamin' => 'sometimes|string|max:10',
            'tempat_lahir' => 'sometimes|string|max:255',
            'tanggal_lahir' => 'sometimes|date',
            'no_hp' => 'sometimes|string|max:15',
            'status_kawin' => 'sometimes|boolean',
            'pekerjaan' => 'sometimes|string|max:255',
            'status_warga' => 'sometimes|boolean'
        ]);

        $warga->update($validatedData);

        return redirect()->route('pages.datawargart')->with('success', 'Data warga berhasil diupdate.');
    }

    public function gantistatus($id)
    {
        $warga = WargaModel::findOrFail($id);
        return view('rt.gantistatus', compact('warga'), [
            "title" => "gantistatus"
        ]);
    }

    public function ganti(Request $request, $id)
    {
        $warga = WargaModel::findOrFail($id);        
        // Validasi data yang diterima
        $validatedData = $request -> validate([
            'status_warga' => 'required|boolean'
        ]);

        // Buat data warga baru
        $warga->update($validatedData);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('pages.datawargart')->with('success', 'Data warga berhasil ditambahkan.');
    }

    // Detail Warga
    public function detailstatus($id)
    {
        $warga = WargaModel::findOrFail($id);
        return view('rt.detailstatus', compact('warga'), [
            "title" => "detailstatus"
        ]);
    }
}
