<?php

use Illuminate\Support\Facades\Route;

// Data Controller
use App\Http\Controllers\DataWarga;

use App\Http\Controllers\BansosController;
use App\Http\Controllers\DataKeluarga;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\SuratController;

// Login Controller
use App\Http\Controllers\LoginController;

// Page Controller
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

// Model Informasi
use App\Models\InformasiModel;

// Landing Page (DEFAULT)
Route::get('/', function () {
    $infos = InformasiModel::where('status', 'publik')->orderBy('tanggal', 'asc')->take(3)->get();
    return view('page.landing', [
        'dir' => 'pages', 
        'css' => 'landing-page', 
        'title' => 'Landing'
    ], compact('infos'));
})->name('landing');

// LOGIN PAGE
Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index')->name('login-page');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});

// PAGE GENERAL
// Route::middleware('auth')->group(function(){
    Route::controller(PageController::class)->group(function(){
        Route::get('/{role}/dashboard', 'index')->name('dashboard');
        Route::get('/{role}/profil', 'profil')->name('profil');
        Route::get('/{role}/surat', 'surat')->name('surat');
        Route::get('/{role}/keuangan', 'keuangan')->name('keuangan');
        Route::get('/{role}/info', 'info')->name('info');

        // Khusus RT
        Route::get('/{role}/data_warga', 'data_warga')->name('data_warga');
        Route::get('/{role}/data_keluarga', 'data_keluarga')->name('data_keluarga');

        Route::get('/{role}/bantuan_sosial', 'bantuan_sosial')->name('bantuan_sosial');
        
        // Khusus RW
        Route::get('/{role}/data_rw', 'data_rw')->name('data_rw');
        Route::get('/{role}/data_rt', 'data_rt')->name('data_rt');
    });
// });

// FORM DATA WARGA
Route::controller(DataWarga::class) -> group(function () {
    Route::get('/{role}/tambah_warga', 'tambah_warga_index')->name('tambah_warga_index');
    Route::post('/{role}/tambah_warga', 'tambah_warga')->name('tambah_warga');

    Route::get('/{role}/detail_warga/{id}', 'detail_warga')->name('detail_warga');

    Route::get('/{role}/edit_warga/{id}', 'edit_warga_index')->name('edit_warga_index');
    Route::post('/{role}/edit_warga/{id}', 'edit_warga')->name('edit_warga');

    Route::get('/{role}/ganti_status_warga/{id}', 'ganti_status_warga_index')->name('ganti_status_warga_index');
    Route::post('/{role}/ganti_status_warga/{id}', 'ganti_status_warga')->name('ganti_status_warga');
});

// FORM DATA KELUARGA
Route::controller(DataKeluarga::class) -> group(function () {
    Route::get('/{role}/tambah_keluarga', 'tambah_keluarga_index')->name('tambah_keluarga_index');
    Route::post('/{role}/tambah_keluarga', 'tambah_keluarga')->name('tambah_keluarga');
});

// FORM SURAT (RT DAN WARGA)
Route::controller(SuratController::class) -> group(function(){
    // WARGA
    Route::get('{role}/ajukan_surat', 'ajukan_surat_index')->name('ajukan_surat_index');
    Route::post('{role}/ajukan_surat', 'ajukan_surat')->name('ajukan_surat');

    Route::get('{role}/detail_surat/{id}', 'detail_surat')->name('detail_surat');

    // RT
    Route::get('/verifikasi_surat', 'verifikasi_surat')->name('verifikasi_surat');
    Route::post('/verifikasi_surat', 'verifikasi')->name('verifikasi');
});

// FORM INFORMASI (RT)
Route::controller(InfoController::class) -> group(function(){
    // TAMPIL SATU INFORMASI (POP UP)
    Route::get('/tampil_info/{id}', 'tampil_info')->name('tampil_info');

    // TAMBAH INFORMASI
    Route::get('{role}/tambah_info', 'tambah_info_index')->name('tambah_info_index');
    Route::post('{role}/tambah_info', 'tambah_info')->name('tambah_info');

    // EDIT INFORMASI
    Route::get('{role}/edit_info/{id}', 'edit_info_index')->name('edit_info_index');
    Route::post('{role}/edit_info/{id}', 'edit_info')->name('edit_info');

    // HAPUS INFORMASI
    Route::delete('{role}/hapus_info/{id}', 'hapus_info')->name('hapus_info');
});

// FORM KEUANGAN (RT)
Route::controller(KeuanganController::class) -> group(function(){
    // FORM TAMBAH UANG
    Route::get('{role}/tambah_uang', 'tambah_uang_index')->name('tambah_uang_index');
    Route::post('{role}/tambah_uang', 'tambah_uang')->name('tambah_uang');
});

// FORM BANSOS
Route::controller(BansosController::class) -> group(function(){
    Route::get('/{role}/ajukan_bansos', 'ajukan_bansos_index')->name('ajukan_bansos_index');
    Route::post('/{role}/ajukan_bansos', 'ajukan_bansos')->name('ajukan_bansos');

    Route::get('/{role}/edit_bansos/{id}', 'edit_bansos_index')->name('edit_bansos_index');
    Route::post('/{role}/edit_bansos/{id}', 'edit_bansos')->name('edit_bansos');
});

// FORM UBAH PASSWORD
Route::controller(UserController::class) -> group(function(){
    Route::get('{role}/ubah_password', 'ubah_password_index')->name('ubah_password_index');
    Route::post('{role}/ubah_password', 'ubah_password')->name('ubah_password');
});


