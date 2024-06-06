<?php

namespace App\Http\Controllers;

use App\Models\InformasiModel;
use App\Models\KategoriInfoModel;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    // Halaman Buat Informasi
    public function tambah_info_index($role){
        $kategoriInfos = KategoriInfoModel::all();
        return view
        (
            'form.info.tambah-info', 
            [
                'dir' => "templates", 
                'css' => 'form', 
                'title' => "Tambah Informasi", 
                'role' => $role,
                'route' => 'tambah_info',
                'pages' => 'info',
                'id' => null
            ], 
            compact('kategoriInfos')
        );
    }

    // Halaman Edit Informasi
    public function edit_info_index($role, $id){
        $info = InformasiModel::find($id);
        $kategoriInfos = KategoriInfoModel::all();
        return view
        (
            'form.info.edit-info', 
            [
                'dir' => "templates", 
                'css' => 'form', 
                'title' => "Edit Informasi", 
                'role' => $role,
                'route' => 'edit_info',
                'pages' => 'info',
                'id' => $id
            ], 
            compact('info', 'kategoriInfos')
        );
    }


    // Buat Informasi
    public function tambah_info($role, Request $request){
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|exists:kategori_info,id',
            'id_rt' => 'required|integer',
            'status' => 'required|in:Publik,Draf',
            'tanggal' => 'required|date',
            'tempat' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Tentukan path penyimpanan (Simpan Di Assets)
        $destinationPath = public_path('assets/imgs/info');
        $gambar = $request->file('gambar');
        $gambarName = time() . '_' . $gambar->getClientOriginalName();

        // Pindahkan file ke direktori tujuan
        $gambar->move($destinationPath, $gambarName);

        InformasiModel::create([
            'judul' => $request->judul,
            'id_kategori' => $request->kategori,
            'id_rt' => $request->id_rt,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'tempat' => $request->tempat,
            'status' => $request->status,
            'gambar' => $gambarName,
        ]);

        return redirect()->route('info', ['role' => $role])->with('success', 'Informasi berhasil ditambahkan');
    }

    // Edit Informasi
    public function edit_info($role, $id, Request $request){
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|exists:kategori_info,id',
            'id_rt' => 'required|integer',
            'status' => 'required|in:Publik,Draf',
            'tanggal' => 'required|date',
            'tempat' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $info = InformasiModel::with('kategori_info')->find($id);

        // Jika tidak ada data info berdasarkan id
        if (!$info) {
            return redirect()->route('info', ['role' => $role])->with('error', 'Informasi tidak ditemukan');
        }

        // Jika mengganti gambar
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($info->gambar && file_exists(public_path('assets/imgs/info/' . $info->gambar))) {
                unlink(public_path('assets/imgs/info/' . $info->gambar));
            }

            $destinationPath = public_path('assets/imgs/info');
            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move($destinationPath, $gambarName);
            $info->gambar = $gambarName;
        }

        // Update informasi dengan data dari request
        $info->judul = $request->judul;
        $info->id_kategori = $request->kategori;
        $info->id_rt = $request->id_rt;
        $info->deskripsi = $request->deskripsi;
        $info->tanggal = $request->tanggal;
        $info->tempat = $request->tempat;
        $info->status = $request->status;
        $info->save();

        // Redirect ke route halaman informasi
        return redirect()->route('info', ['role' => $role])->with('success', 'Informasi berhasil diperbarui');
    }
    
    // Tampilkan Detail Salah Satu Informasi (POP UP AJAX)
    public function tampil_info($id){
        $info = InformasiModel::with('kategori_info')->find($id);
        
        if ($info) {
            return response()->json([
                'judul' => $info->judul,
                'deskripsi' => $info->deskripsi,
                'id_rt' => $info->id_rt,
                'tanggal' => $info->tanggal,
                'tempat' => $info->tempat,
                'gambar' => $info->gambar,
                'kategori' => $info->kategori_info->nama_kategori,
                'status' => $info->status,
            ]);
        } else {
            return response()->json(['error' => 'Informasi tidak ditemukan'], 404);
        }
    }

    // Hapus Informasi
    public function hapus_info($role, $id){
        $info = InformasiModel::find($id);
        if ($info) {
            $info->delete();
            return redirect()->route('info', ['role' => $role])->with('success', 'Informasi berhasil dihapus');
        } else {
            return redirect()->route('info', ['role' => $role])->with('error', 'Informasi tidak ditemukan');
        }
    }
}
