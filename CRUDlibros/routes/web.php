<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('home', LibroController::class);
