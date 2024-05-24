<?php
use App\Http\Controllers\BansosController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\KeuanganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RukunTetangga;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\Warga;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Landing Page (DEFAULT)
Route::get('/', function () {
    return view('landing', ['dir' => 'pages', 'css' => 'landing-page', 'title' => 'Landing']);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/dashboardrt', 'PagesControllerRT@dashboardrt')->name('pages.dashboardrt');
    Route::get('/surat', 'PagesControllerRT@surat')->name('pages.surat');
    Route::get('/detailsurat', 'PagesControllerRT@detailsurat')->name('pages.detailsurat');
    Route::get('/keuangan', 'PagesControllerRT@keuangan')->name('pages.keuangan');
    Route::get('/tambahuang', 'PagesControllerRT@tambahuang')->name('pages.tambahuang');
    Route::get('/info', 'PagesControllerRT@info')->name('pages.info');
    Route::get('/tambahinfo', 'PagesControllerRT@tambahinfo')->name('pages.tambahinfo');
    
    // DATA WARGA
    Route::get('/datawargart', 'PagesControllerRT@datawargart')->name('pages.datawargart');

    // TAMPILAN EDIT
    Route::get('/editwarga/{id}', 'PagesControllerRT@editwarga')->name('pages.editwarga');
    Route::get('/detailstatus/{id}', 'PagesControllerRT@detailstatus')->name('pages.detailstatus');
    
    // UPDATE DATA EDIT
    Route::put('/editwarga/{id}', 'PagesControllerRT@update')->name('pages.updatewarga');

    Route::get('/tambahwarga', 'PagesControllerRT@tambahwarga')->name('pages.tambahwarga');
    Route::post('/tambahwarga', 'PagesControllerRT@tambah')->name('pages.tambahdatawarga');

    // Ganti Status Warga
    Route::get('/gantistatus/{id}', 'PagesControllerRT@gantistatus')->name('pages.gantistatus');
    Route::post('/gantistatus/{id}', 'PagesControllerRT@ganti')->name('pages.gantistatuswarga');
});

// Login Controller (LOGIN)
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'autentikasi']);


// RT Controller (PAGES)
Route::controller(RukunTetangga::class) -> group(function () {
    Route::get('/dashboard_rt', 'index')->name('dashboard_rt');
    Route::get('/surat_rt', 'surat')->name('surat_rt');
    Route::get('/keuangan_rt', 'keuangan')->name('keuangan_rt');
    Route::get('/info_rt', 'info')->name('info_rt');
});

// RW Controller (PAGES)
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/dashboardw', 'PagesControllerW@dashboard')->name('pages.dashboardw');
    Route::get('/keuanganrw', 'PagesControllerRW@keuanganrw')->name('pages.keuanganrw');
    Route::get('/inforw', 'PagesControllerRW@inforw')->name('pages.inforw');
    Route::get('/datawargarw', 'PagesControllerRW@datawargarw')->name('pages.datawargarw');
});

// Warga Controller (PAGES)
Route::controller(Warga::class) -> group(function () {
    Route::get('/dashboard_warga', 'index') -> name('dashboard_warga');
    Route::get('/datadiri_warga', 'datadiri')->name('datadiri_warga');
    Route::get('/surat_warga', 'surat') -> name('surat_warga');
    Route::get('/keuangan_warga', 'keuangan') -> name('keuangan_warga');
    Route::get('/info_warga', 'info') -> name('informasi_warga');
});

// FORM SURAT
Route::controller(SuratController::class) -> group(function(){
    Route::get('/ajukan_surat', 'ajukan_surat')->name('ajukan_surat');
    Route::get('/detail_surat', 'detail_surat')->name('detail_surat');
    // Route::get('warga/ajukansurat2', 'PagesControllerW@ajukansurat2')->name('pages.ajukansurat2');
});


// FORM INFORMASI
Route::controller(InfoController::class) -> group(function(){
    // Route::get('/tambahinfo', 'PagesControllerRT@tambahinfo')->name('pages.tambahinfo');
});

// FORM KEUANGAN
Route::controller(KeuanganController::class) -> group(function(){
    // Route::get('/tambahuang', 'PagesControllerRT@tambahuang')->name('pages.tambahuang');
});

// FORM BANSOS
Route::controller(BansosController::class) -> group(function(){
    //
});