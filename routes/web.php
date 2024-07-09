<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// })->middleware('auth');

Route::post('/login', [LoginController::class,'index']);
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/',[MainController::class, 'index'])->middleware('auth');


