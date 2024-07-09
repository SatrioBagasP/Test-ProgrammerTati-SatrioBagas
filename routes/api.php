<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/fetch_data',[DataController::class, 'fetch_data']);
Route::get('/provinsi/{id?}',[DataController::class, 'get_data']);
Route::post('/provinsi',[DataController::class, 'store_data']);
Route::put('/provinsi/{id?}',[DataController::class, 'update_data']);
Route::delete('/provinsi/{id?}',[DataController::class, 'delete_data']);
