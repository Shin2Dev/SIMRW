<?php

namespace App\Http\Controllers;

use App\Models\CalonPenerimaBansosModel;
use App\Models\KriteriaBansosModel;
use App\Models\SubKriteriaBansosModel;
use App\Models\WargaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BansosController extends Controller
{
    public function ajukan_bansos_index($role)
    {
        return view('form.bansos.ajukan-bansos', [
            'dir' => 'templates', 
            'css' => 'form', 
            'title' => 'Ajukan Calon Penerima Bansos', 
            'role' => $role,
            'route' => 'ajukan_bansos',
            'pages' => 'bantuan_sosial',
            'id' => null
        ]);
    }

    public function edit_bansos_index($role, $id)
    {
        $calons = CalonPenerimaBansosModel::find($id);
        return view('form.bansos.edit-bansos', [
            'dir' => 'templates', 
            'css' => 'form', 
            'title' => 'Edit Calon Penerima Bansos', 
            'role' => $role,
            'route' => 'edit_bansos',
            'pages' => 'bantuan_sosial',
            'id' => $id
        ], compact('calons'));
    }

    public function edit_bansos($role, $id){
        $calons = CalonPenerimaBansosModel::find($id);
        $rules = [
            'pekerjaan' => 'required|string',
            'penghasilan' => 'required|string',
            'usia' => 'required|string',
            'pendidikan' => 'required|string',
            'jenis_lantai' => 'required|string',
            'jenis_dinding' => 'required|string',
            'luas_bangunan' => 'required|string',
            'jenis_kendaraan' => 'required|string',
            'sumber_penerangan' => 'required|string',
            'status_rumah' => 'required|string',
        ];

        $validator = Validator::make(request()->all(), $rules);

        // Update the data
        $calons->pekerjaan = request()->pekerjaan;
        $calons->penghasilan_bulanan = request()->penghasilan;
        $calons->usia = request()->usia;
        $calons->pendidikan = request()->pendidikan;
        $calons->jenis_lantai = request()->jenis_lantai;
        $calons->jenis_dinding = request()->jenis_dinding;
        $calons->luas_bangunan = request()->luas_bangunan;
        $calons->kendaraan = request()->jenis_kendaraan;
        $calons->sumber_penerangan = request()->sumber_penerangan;
        $calons->status_kepemilikan_rumah = request()->status_rumah;
        $calons->save();

        return redirect()->route('bantuan_sosial', ['role' => $role])->with('success', 'Data Penerima Bansos berhasil diupdate');
    }

    public function detail_bansos($role, $id)
    {
        $calons = CalonPenerimaBansosModel::find($id);
        return view('form.bansos.detail-bansos', [
            'dir' => 'templates', 
            'css' => 'detail', 
            'title' => 'Detail Calon Penerima Bansos', 
            'role' => $role,
            'pages' => 'bantuan_sosial',
            'id' => $id,
        ], compact('calons'));
    }

    public function ajukan_bansos($role, Request $request){
        // Define validation rules
        $rules = [
            'data.*.nik' => 'required|string',
            'data.*.nama' => 'required|string',
            'data.*.pekerjaan' => 'required|string',
            'data.*.penghasilan' => 'required|string',
            'data.*.usia' => 'required|string',
            'data.*.pendidikan' => 'required|string',
            'data.*.jenis_lantai' => 'required|string',
            'data.*.jenis_dinding' => 'required|string',
            'data.*.luas_lantai' => 'required|string',
            'data.*.jenis_kendaraan' => 'required|string',
            'data.*.sumber_penerangan' => 'required|string',
            'data.*.status_rumah' => 'required|string',
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules);

        
        // Retrieve the validated data
        $data = $validator->validated()['data'];
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Check if the data already exists
        foreach ($data as $item) {
            $warga = WargaModel::where('nik', $item['nik'])->first();
            $calon_penerima_bansos = CalonPenerimaBansosModel::where('id_warga', $warga->id)->first();

            if ($calon_penerima_bansos) {
                return redirect()->back()->with('warning', 'Data bansos sudah ada sebelumnya');
            }
        }

        // Loop through the data and save each entry
        foreach ($data as $item) {
            $calon_penerima_bansos = new CalonPenerimaBansosModel();
            $warga = WargaModel::where('nik', $item['nik'])->first();

            $calon_penerima_bansos->id_warga = $warga->id;
            $calon_penerima_bansos->id_rt = $warga->id_rt;
            $calon_penerima_bansos->pekerjaan = $item['pekerjaan'];
            $calon_penerima_bansos->penghasilan_bulanan = $item['penghasilan'];
            $calon_penerima_bansos->usia = $item['usia'];
            $calon_penerima_bansos->pendidikan = $item['pendidikan'];
            $calon_penerima_bansos->luas_bangunan = $item['luas_lantai'];
            $calon_penerima_bansos->jenis_lantai = $item['jenis_lantai'];
            $calon_penerima_bansos->jenis_dinding = $item['jenis_dinding'];
            $calon_penerima_bansos->kendaraan = $item['jenis_kendaraan'];
            $calon_penerima_bansos->sumber_penerangan = $item['sumber_penerangan'];
            $calon_penerima_bansos->status_kepemilikan_rumah = $item['status_rumah'];
            $calon_penerima_bansos->penerima_bansos = false;
            $calon_penerima_bansos->nilai_bansos = 0;
            $calon_penerima_bansos->ranking_bansos = 0;
            $calon_penerima_bansos->save();
        }

        // Redirect or return a response as needed
        return redirect()->route('bantuan_sosial', ['role' => $role])->with('success', 'Data Bansos Berhasil Diajukan!');
    }

    public function penentuan_bansos($role){
        $calon_penerima_bansos = CalonPenerimaBansosModel::all();
        // $kriteria_bansos = KriteriaBansosModel::all();
        $sub_kriteria_bansos = SubKriteriaBansosModel::all();

        $nilai_calon = array();
        foreach ($calon_penerima_bansos as $calon) {
            $nilai_calon[$calon->warga->nama] = array();
            foreach ($sub_kriteria_bansos as $sub_kriteria) {
                if (in_array($sub_kriteria->nama_sub_kriteria, [$calon->pekerjaan, $calon->penghasilan_bulanan, $calon->usia, $calon->pendidikan, $calon->luas_bangunan, $calon->jenis_lantai, $calon->jenis_dinding, $calon->kendaraan, $calon->sumber_penerangan, $calon->status_kepemilikan_rumah])) {
                    $nilai_calon[$calon->warga->nama][] = $sub_kriteria->nilai_sub_kriteria;
                }
            }
        }

        $normalisasi_matriks = array();
        foreach ($calon_penerima_bansos as $calon) {
            $normalisasi_matriks[$calon->warga->nama] = array();
            for ($i = 0; $i <= 9; $i++) {
                $normalisasi_matriks[$calon->warga->nama][] = $nilai_calon[$calon->warga->nama][$i] / max(array_column($nilai_calon, $i));
            }
        }

        $nilai_psi = array();
        foreach ($calon_penerima_bansos as $calon) {
            $nilai_psi[$calon->warga->nama] = array_sum($normalisasi_matriks[$calon->warga->nama]);
        }

        arsort($nilai_psi);
        $ranking = array_flip(array_keys($nilai_psi));
        
        // Update penerima_bansos based on checked items
        foreach ($calon_penerima_bansos as $calon) {
            $isChecked = in_array($calon->warga->nama, request('aksi', []));
            $calon->penerima_bansos = $isChecked;
            $calon->nilai_bansos = $nilai_psi[$calon->warga->nama];
            $calon->ranking_bansos = $ranking[$calon->warga->nama] + 1;
            $calon->save();
        }

        return redirect()->route('bantuan_sosial', ['role' => $role])->with('success', 'Daftar Penerima Bansos Telah Keluar!');
    }
}

