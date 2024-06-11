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
    $infos = InformasiModel::where('status_info', 'publik')->orderBy('tanggal_info', 'asc')->take(3)->get();
    return view('page.landing', [
        'dir' => 'pages', 
        'css' => 'landing-page', 
        'title' => 'Landing'
    ], compact('infos'));
})->middleware('guest')->name('landing');

// LOGIN PAGE
Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index')->name('login-page')->middleware('guest');
    Route::post('/login', 'login')->name('login')->middleware('guest');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('/forgot_password', 'forgot_password')->name('forgot_password')->middleware('guest');
    Route::get('/ubah_pass', 'ubah_pass_index')->name('ubah_pass_index')->middleware('guest');
    Route::post('/ubah_pass', 'ubah_pass')->name('ubah_pass')->middleware('guest');
});

Route::prefix('/{role}')->group(function () {
    // PAGE GENERAL
    Route::controller(PageController::class)->group(function() {
        Route::group(['middleware' => 'checkRole:warga,rt,rw'], function () {
            Route::get('/dashboard', 'index')->name('dashboard');
            Route::get('/profil', 'profil')->name('profil');
            Route::get('/surat', 'surat')->name('surat');
            Route::get('/keuangan', 'keuangan')->name('keuangan');
            Route::get('/info', 'info')->name('info');
            Route::get('/bantuan_sosial', 'bantuan_sosial')->name('bantuan_sosial');
            Route::post('/bantuan_sosial', 'bantuan_sosial')->name('bantuan_sosial');
        });
    
            // Khusus RT
        Route::group(['middleware' => 'checkRole:rt,rw'], function () {
            Route::get('/data_warga', 'data_warga')->name('data_warga');
            Route::get('/data_keluarga', 'data_keluarga')->name('data_keluarga');
        });
            
            // Khusus RW
        Route::group(['middleware' => 'checkRole:rw'], function () {
            Route::get('/data_rw', 'data_rw')->name('data_rw');
            Route::get('/data_rt', 'data_rt')->name('data_rt'); 
        });
    });

    // FORM DATA WARGA
    Route::controller(DataWarga::class) -> group(function () {
        Route::group(['middleware' => 'checkRole:rt,rw'], function () {
            Route::get('/detail_warga/{id}', 'detail_warga')->name('detail_warga');
            Route::get('/tampil_warga', 'tampil_warga')->name('tampil_warga');
            Route::get('/tampil_warga_rt', 'tampil_warga_rt')->name('tampil_warga_rt');
        });

        Route::group(['middleware' => 'checkRole:rt'], function () {
            Route::get('/tambah_warga', 'tambah_warga_index')->name('tambah_warga_index');
            Route::post('/tambah_warga', 'tambah_warga')->name('tambah_warga');
        
            Route::get('/edit_warga/{id}', 'edit_warga_index')->name('edit_warga_index');
            Route::post('/edit_warga/{id}', 'edit_warga')->name('edit_warga');
        
            Route::get('/ganti_status_warga/{id}', 'ganti_status_warga_index')->name('ganti_status_warga_index');
            Route::post('/ganti_status_warga/{id}', 'ganti_status_warga')->name('ganti_status_warga');
        });
    });

    // FORM DATA KELUARGA
    Route::controller(DataKeluarga::class) -> group(function () {
        Route::group(['middleware' => 'checkRole:rt,rw'], function () {
            Route::get('/detail_keluarga/{id}', 'detail_keluarga')->name('detail_keluarga');
            // Route::get('/tampil_keluarga', 'tampil_keluarga')->name('tampil_keluarga');
        });

        Route::group(['middleware' => 'checkRole:rt'], function () {
            Route::get('/tambah_keluarga', 'tambah_keluarga_index')->name('tambah_keluarga_index');
            Route::post('/tambah_keluarga', 'tambah_keluarga')->name('tambah_keluarga');
    
            Route::get('/edit_keluarga/{id}', 'edit_keluarga_index')->name('edit_keluarga_index');
            Route::post('/edit_keluarga/{id}', 'edit_keluarga')->name('edit_keluarga');
        });
    });

    // FORM SURAT (RT DAN WARGA)
    Route::controller(SuratController::class) -> group(function(){
        // WARGA
        Route::group(['middleware' => 'checkRole:warga'], function () {
            Route::get('/ajukan_surat', 'ajukan_surat_index')->name('ajukan_surat_index');
            Route::post('/ajukan_surat', 'ajukan_surat')->name('ajukan_surat');
            Route::get('/cetak_surat/{id}', 'cetak_surat')->name('cetak_surat');
        });

        // perbaikan
        Route::group(['middleware' => 'checkRole:warga,rt,rw'], function () {
            Route::get('/detail_surat/{id}', 'detail_surat')->name('detail_surat');
        });

        Route::group(['middleware' => 'checkRole:rt'], function () {
            Route::get('/verifikasi_surat/{id}', 'verifikasi_surat')->name('verifikasi_surat');
            Route::post('/verifikasi_surat/{id}', 'verifikasi')->name('verifikasi');
        });
    });

    // FORM INFORMASI (RT)
    Route::controller(InfoController::class) -> group(function(){
        // TAMPIL SATU INFORMASI (POP UP)
        Route::group(['middleware' => 'checkRole:warga,rt,rw'], function () {
            Route::get('/tampil_info/{id}', 'tampil_info')->name('tampil_info');
        });

        Route::group(['middleware' => 'checkRole:rt'], function () {
            // TAMBAH INFORMASI
            Route::get('/tambah_info', 'tambah_info_index')->name('tambah_info_index');
            Route::post('/tambah_info', 'tambah_info')->name('tambah_info');

            // EDIT INFORMASI
            Route::get('/edit_info/{id}', 'edit_info_index')->name('edit_info_index');
            Route::post('/edit_info/{id}', 'edit_info')->name('edit_info');
            // HAPUS INFORMASI
            Route::delete('/hapus_info/{id}', 'hapus_info')->name('hapus_info');
        });
    });

    // FORM KEUANGAN (RT)
    Route::controller(KeuanganController::class) -> group(function(){
        Route::group(['middleware' => 'checkRole:rt'], function () {
            // FORM TAMBAH UANG
            Route::get('/tambah_uang', 'tambah_uang_index')->name('tambah_uang_index');
            Route::post('/tambah_uang', 'tambah_uang')->name('tambah_uang');

            Route::delete('/hapus_uang/{id}', 'hapus_uang')->name('hapus_uang');
        });
    });

    // FORM BANSOS
    Route::controller(BansosController::class) -> group(function(){
        Route::group(['middleware' => 'checkRole:rt'], function () {
            Route::get('/ajukan_bansos', 'ajukan_bansos_index')->name('ajukan_bansos_index');
            Route::post('/ajukan_bansos', 'ajukan_bansos')->name('ajukan_bansos');

            Route::get('/edit_bansos/{id}', 'edit_bansos_index')->name('edit_bansos_index');
            Route::post('/edit_bansos/{id}', 'edit_bansos')->name('edit_bansos');

            Route::get('/detail_bansos/{id}', 'detail_bansos')->name('detail_bansos');
        });

        Route::group(['middleware' => 'checkRole:rw'], function () {
            Route::post('/penentuan_bansos', 'penentuan_bansos')->name('penentuan_bansos');
        });
    });

    // FORM UBAH PASSWORD
    Route::controller(UserController::class) -> group(function(){
        Route::group(['middleware' => 'checkRole:warga,rt,rw'], function () {
            Route::get('/ubah_password', 'ubah_password_index')->name('ubah_password_index');
            Route::post('/ubah_password', 'ubah_password')->name('ubah_password');
        });
    });
});



