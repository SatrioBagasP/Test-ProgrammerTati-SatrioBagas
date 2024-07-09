<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\isKepalaDinas;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// })->middleware('auth');

Route::post('/login', [LoginController::class,'index']);
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/',[MainController::class, 'index'])->middleware('auth');
Route::get('/logharian',[MainController::class, 'log_harian'])->middleware('staf');
Route::get('/createlog',[MainController::class, 'log'])->middleware('staf');
Route::post('/store_log',[MainController::class, 'store_log'])->middleware('staf');


