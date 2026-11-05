<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blade/variables', [
    \App\Http\Controllers\BladeController::class,
    'variables'
]);
