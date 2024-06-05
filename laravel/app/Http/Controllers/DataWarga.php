<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WargaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DataWarga extends Controller
{
    // FORM TAMBAH WARGA
    public function tambah_warga_index($role) {
        return view('form.data-warga.tambah-warga', [
            'dir' => 'templates', 
            'css' => 'form', 
            'title' => 'Tambah Data Warga', 
            'role' => $role,
            'route' => 'tambah_warga',
            'pages' => 'data_warga',
            'id' => null
        ]);
    }

    // ALGORITMA TAMBAH DATA WARGA
    public function tambah_warga($role, Request $request) {
        $request->validate([
            'nik' => 'required|string|max:16',
            'nama' => 'required|string|max:255',
            'rt' => 'required|string|max:3',
            'rw' => 'required|string|max:3',
            'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'golongan_darah' => 'required|string|in:A,B,AB,O',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat_ktp' => 'required|string|max:255',
            'alamat_domisili' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'agama' => 'required|string|in:Islam,Kristen,Katolik,Hindu,Buddha,Konghucu',
            'pekerjaan' => 'required|string|max:255',
            'status_kawin' => 'required|string|in:Belum Kawin,Kawin,Cerai Hidup,Cerai Mati',
            'upload_ktp' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);

        // Tentukan path penyimpanan (Simpan Di Assets)
        $destinationPath = public_path('assets/imgs/ktp');
        $ktp = $request->file('upload_ktp');
        $ktpName = time() . '_' . $ktp->getClientOriginalName();

        // Pindahkan file ke direktori tujuan
        $ktp->move($destinationPath, $ktpName);

        // Simpan data warga ke database
        WargaModel::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'jenis_kelamin' => $request->jenis_kelamin,
            'golongan_darah' => $request->golongan_darah,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat_ktp' => $request->alamat_ktp,
            'alamat_domisili' => $request->alamat_domisili,
            'no_hp' => $request->no_hp,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'status_kawin' => $request->status_kawin,
            'gambar_ktp' => $ktpName,
        ]);

        $this->tambah_user($request);

        return redirect()->route('data_warga', ['role' => $role])->with('success', 'Data warga berhasil ditambahkan');
    }

    public function tambah_user(Request $request) {
        User::create([
            'username' => $request->nik,
            'password' => Hash::make($request->nik),
            'role' => 'warga',
        ]);
    }

    public function edit_warga($role, $id, Request $request){
        $request->validate([
            'nik' => 'required|string|max:16',
            'nama' => 'required|string|max:255',
            'rt' => 'required|string|max:3',
            'rw' => 'required|string|max:3',
            'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'golongan_darah' => 'required|string|in:A,B,AB,O',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat_ktp' => 'required|string|max:255',
            'alamat_domisili' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'agama' => 'required|string|in:Islam,Kristen,Katolik,Hindu,Buddha,Konghucu',
            'pekerjaan' => 'required|string|max:255',
            'status_kawin' => 'required|string|in:Belum Kawin,Kawin,Cerai Hidup,Cerai Mati',
            'upload_ktp' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
        ]);

        $warga = WargaModel::find($id);

        if ($request->hasFile('upload_ktp')) {
            $destinationPath = public_path('assets/imgs/ktp');
            $ktp = $request->file('upload_ktp');
            $ktpName = time() . '_' . $ktp->getClientOriginalName();
            
            // Hapus gambar KTP lama jika ada
            if ($warga->gambar_ktp && file_exists($destinationPath . '/' . $warga->gambar_ktp)) {
                unlink($destinationPath . '/' . $warga->gambar_ktp);
            }
            
            $ktp->move($destinationPath, $ktpName);
            $warga->gambar_ktp = $ktpName;
        }

        $warga->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'jenis_kelamin' => $request->jenis_kelamin,
            'golongan_darah' => $request->golongan_darah,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat_ktp' => $request->alamat_ktp,
            'alamat_domisili' => $request->alamat_domisili,
            'no_hp' => $request->no_hp,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'status_kawin' => $request->status_kawin,
        ]);

        return redirect()->route('data_warga', ['role' => $role])->with('success', 'Data warga berhasil diubah');
    }

    // FORM EDIT WARGA
    public function edit_warga_index($role, $id) {
        $warga = WargaModel::find($id);
        return view('form.data-warga.edit-warga', [
            'dir' => 'templates', 
            'css' => 'form', 
            'title' => 'Edit Data Warga', 
            'role' => $role,
            'route' => 'edit_warga',
            'pages' => 'data_warga',
            'id' => $id
        ], compact('warga'));
    }

    // FORM GANTI STATUS WARGA
    public function ganti_status_warga_index($role, $id){
        $warga = WargaModel::find($id);
        return view('form.data-warga.ganti-status-warga', [
            'dir' => 'templates', 
            'css' => 'form', 
            'title' => 'Ganti Status Warga', 
            'role' => $role,
            'route' => 'ganti_status_warga',
            'pages' => 'data_warga',
            'id' => $id
        ], compact('warga'));
    }

    public function ganti_status_warga($role, $id, Request $request){
        $request->validate([
            'status_warga' => 'required|string|in:Aktif,Meninggal,Pindah,Hilang',
            'catatan_status' => 'required|string|max:255'
        ]);

        $warga = WargaModel::find($id);
        $warga->update([
            'status_warga' => $request->status_warga,
            'catatan_status' => $request->catatan_status
        ]);

        return redirect()->route('data_warga', ['role' => $role])->with('success', 'Status warga berhasil diubah');
    }

    // ACTION (DETAIL DATA WARGA)
    public function detail_warga($role, $id) {
        $warga = WargaModel::find($id);
        return view('form.data-warga.detail-data-warga', [
            'dir' => 'templates', 
            'css' => 'detail',
            'title' => 'Detail Data Warga', 
            'role' => $role,
            'pages' => 'data_warga',
            'id' => $id
        ], compact('warga'));
    }
}
