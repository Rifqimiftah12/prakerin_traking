<?php

use App\Models\Provinsi;
use App\Models\Kasus2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Api Provinsi
Route::get('provinsi', [ProvinsiController::class,'index']);
Route::post('provinsi', [ProvinsiController::class,'store']);
Route::get('provinsi/{id}', [ProvinsiController::class,'show']);
Route::delete('/provinsi/{id}', [ProvinsiController::class,'destroy']);


Route::get('hari', [ApiController::class,'hari']);
Route::get('provinsi1/{id}', [ApiController::class,'provinsi']);
Route::get('provinsi2', [ApiController::class,'provinsi1']);
Route::get('kota', [ApiController::class,'kota']);
Route::get('kecamatan', [ApiController::class,'kecamatan']);
Route::get('kelurahan', [ApiController::class,'kelurahan']);
Route::get('indonesia', [ApiController::class,'indonesia']);
Route::get('global', [ApiController::class, 'global']);