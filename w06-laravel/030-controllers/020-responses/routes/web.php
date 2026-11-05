<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/response/text', [\App\Http\Controllers\ResponseController::class, 'text']);
Route::get('/response/array', [\App\Http\Controllers\ResponseController::class, 'arrayMarshalled']);
Route::get('/response/response', [\App\Http\Controllers\ResponseController::class, 'responseClass']);
Route::get('/response/eloquent', [\App\Http\Controllers\ResponseController::class, 'eloquentModel']);
