<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PredikatController;
use App\Http\Middleware\isKepalaDinas;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// })->middleware('auth');


// Soal Nomor 1
Route::get('/', [MainController::class, 'index'])->middleware('auth');
Route::get('/logharian/', [MainController::class, 'log_harian'])->middleware('auth');

Route::get('/logharian/{id?}', [MainController::class, 'log_harian'])->middleware('LogOwnership');
Route::post('/updatelog/{id?}', [MainController::class, 'update_log'])->middleware('LogOwnership');

Route::get('/createlog', [MainController::class, 'log'])->middleware('staf');
Route::post('/store_log', [MainController::class, 'store_log'])->middleware('staf');

Route::post('/login', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);


// Soal Nomor 3
Route::get('/predikat', [PredikatController::class, 'index']);
Route::post('/predikat', [PredikatController::class, 'index']);


// Soal Nomor 4
Route::get('/hello/{angka?}', [HelloController::class, 'index']);
