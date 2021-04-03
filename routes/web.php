<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('dashboard',function () {
    return view('layouts.master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\ProvinsiController;
Route::resource('provinsi', ProvinsiController::class);

use App\Http\Controllers\KotaController;
Route::resource('kota', KotaController::class);

use App\Http\Controllers\KecamatanController;
Route::resource('kecamatan', KecamatanController::class);

use App\Http\Controllers\KelurahanController;
Route::resource('kelurahan', KelurahanController::class);

use App\Http\Controllers\RwController;
Route::resource('rw', RwController::class);

use App\Http\Controllers\Kasus2Controller;
Route::resource('kasus2', Kasus2Controller::class);

use App\Http\Controllers\NegaraController;
Route::resource('negara', NegaraController::class);

use App\Http\Controllers\KasusController;
Route::resource('kasus', KasusController::class);

use App\Http\Controllers\FrontController;
Route::resource('user', FrontController::class);
Route::resource('/', FrontController::class);
// report
use App\Http\Controllers\ReportController;
Route::get('pdfkasus', [ReportController::class, 'kasus'])->name('pdfkasus');
Route::get('laporanprov', [ReportController::class, 'getReportProvinsi']);
Route::post('laporanprov', [ReportController::class, 'ReportProvinsi']);