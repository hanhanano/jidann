<?php

use App\Http\Controllers\Api\MahasiswaController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Resource untuk posts (web)
Route::resource('posts', PostController::class);

// Prefix untuk API routes
Route::prefix('api')->group(function () {
    Route::apiResource('mahasiswa', MahasiswaController::class);
});
