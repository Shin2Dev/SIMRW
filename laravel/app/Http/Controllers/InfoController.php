<?php

namespace App\Http\Controllers;

use App\Models\InformasiModel;
use App\Models\KategoriInfoModel;
use Illuminate\Http\Request;
use App\Models\WargaModel;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    // Halaman Buat Informasi
    public function tambah_info_index($role){
        $user = Auth::user();
        $warga = WargaModel::where('nik', $user->username)->first();

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
            compact('kategoriInfos', 'warga')
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
            'judul_info' => 'required|string|max:255',
            'id_kategori_info' => 'required|exists:kategori_info,id',
            'rt' => 'required|exists:rt,id',
            'status_info' => 'required|in:Publik,Draf',
            'tanggal_info' => 'required|date',
            'tempat_info' => 'required|string|max:255',
            'deskripsi_info' => 'required|string',
            'gambar_info' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Tentukan path penyimpanan (Simpan Di Assets)
        $destinationPath = public_path('assets/imgs/info');
        $gambar = $request->file('gambar_info');
        $gambarName = time() . '_' . $gambar->getClientOriginalName();

        // Pindahkan file ke direktori tujuan
        $gambar->move($destinationPath, $gambarName);

        InformasiModel::create([
            'judul_info' => $request->judul_info,
            'id_kategori_info' => $request->id_kategori_info,
            'id_rt' => $request->rt,
            'deskripsi_info' => $request->deskripsi_info,
            'tanggal_info' => $request->tanggal_info,
            'tempat_info' => $request->tempat_info,
            'status_info' => $request->status_info,
            'gambar_info' => $gambarName,
        ]);

        return redirect()->route('info', ['role' => $role])->with('success', 'Informasi berhasil ditambahkan');
    }

    // Edit Informasi
    public function edit_info($role, $id, Request $request){
        // dd($request->all());

        $request->validate([
            'judul_info' => 'required|string|max:255',
            'id_kategori_info' => 'required|exists:kategori_info,id',
            'rt' => 'required|exists:rt,id',
            'status_info' => 'required|in:Publik,Draf',
            'tanggal_info' => 'required|date',
            'tempat_info' => 'required|string|max:255',
            'deskripsi_info' => 'required|string',
            'gambar_info' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $info = InformasiModel::with('kategori_info')->find($id);

        // Jika tidak ada data info berdasarkan id
        if (!$info) {
            return redirect()->route('info', ['role' => $role])->with('error', 'Informasi tidak ditemukan');
        }

        // Jika mengganti gambar
        if ($request->hasFile('gambar_info')) {
            // Hapus gambar lama jika ada
            if ($info->gambar_info && file_exists(public_path('assets/imgs/info/' . $info->gambar_info))) {
                unlink(public_path('assets/imgs/info/' . $info->gambar_info));
            }

            $destinationPath = public_path('assets/imgs/info');
            $gambar = $request->file('gambar_info');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move($destinationPath, $gambarName);
            $info->gambar_info = $gambarName;
        }

        // Update informasi dengan data dari request
        $info->judul_info = $request->judul_info;
        $info->id_kategori_info = $request->id_kategori_info;
        $info->id_rt = $request->rt;
        $info->deskripsi_info = $request->deskripsi_info;
        $info->tanggal_info = $request->tanggal_info;
        $info->tempat_info = $request->tempat_info;
        $info->status_info = $request->status_info;
        $info->save();

        // Redirect ke route halaman informasi
        return redirect()->route('info', ['role' => $role])->with('success', 'Informasi berhasil diperbarui');
    }
    
    // Tampilkan Detail Salah Satu Informasi (POP UP AJAX)
    public function tampil_info($role, $id){
        $info = InformasiModel::with('kategori_info')->find($id);
        
        if ($info) {
            return response()->json([
                'judul_info' => $info->judul_info,
                'deskripsi_info' => $info->deskripsi_info,
                'tanggal_info' => $info->tanggal_info,
                'tempat_info' => $info->tempat_info,
                'gambar_info' => $info->gambar_info,
                'kategori' => $info->kategori_info->nama_kategori_info,
                'nama_rt' => $info->rt->nama_rt,
            ]);
        } else {
            return response()->json(['error' => 'Informasi tidak ditemukan'], 404);
        }
    }

    // Hapus Informasi
    public function hapus_info($role, $id){
        $info = InformasiModel::find($id);
        if ($info) {
            if ($info->gambar_info && file_exists(public_path('assets/imgs/info/' . $info->gambar_info))) {
                unlink(public_path('assets/imgs/info/' . $info->gambar_info));
            }
            $info->delete();
            return redirect()->route('info', ['role' => $role])->with('success', 'Informasi berhasil dihapus');
        } else {
            return redirect()->route('info', ['role' => $role])->with('error', 'Informasi tidak ditemukan');
        }
    }
}
