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
});
