<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landing');
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
    Route::get('/datawargart', 'PagesControllerRT@datawargart')->name('pages.datawargart');
    Route::get('/tambahwarga', 'PagesControllerRT@tambahwarga')->name('pages.tambahwarga');
    Route::get('/editwarga', 'PagesControllerRT@editwarga')->name('pages.editwarga');
    Route::get('/gantistatus', 'PagesControllerRT@gantistatus')->name('pages.gantistatus');
    Route::get('/detailstatus', 'PagesControllerRT@detailstatus')->name('pages.detailstatus');
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/dashboardw', 'PagesControllerW@dashboard')->name('pages.dashboardw');
    Route::get('/keuanganrw', 'PagesControllerRW@keuanganrw')->name('pages.keuanganrw');
    Route::get('/inforw', 'PagesControllerRW@inforw')->name('pages.inforw');
    Route::get('/datawargarw', 'PagesControllerRW@datawargarw')->name('pages.datawargarw');
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/dashboard', 'PagesControllerRW@dashboard')->name('pages.dashboard');
    Route::get('/keuanganw', 'PagesControllerW@keuanganw')->name('pages.keuanganw');
    Route::get('/suratw', 'PagesControllerW@suratw')->name('pages.suratw');
    Route::get('/ajukansurat', 'PagesControllerW@ajukansurat')->name('pages.ajukansurat');
    Route::get('/ajukansurat2', 'PagesControllerW@ajukansurat2')->name('pages.ajukansurat2');
    Route::get('/detailsuratw', 'PagesControllerW@detailsuratw')->name('pages.detailsuratw');
    Route::get('/datawargaw', 'PagesControllerW@datawargaw')->name('pages.datawargaw');
});
