<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/eloquent/getting-data', [
    \App\Http\Controllers\EloquentController::class,
    'gettingData'
])->name('eloquent.gettingData');

Route::match(['get', 'post'], '/eloquent/add-category', [
    \App\Http\Controllers\EloquentController::class,
    'addCategory'
])->name('addCategory');

Route::post('/eloquent/delete-category', [
    \App\Http\Controllers\EloquentController::class,
    'deleteCategory'
])->name('deleteCategory');
