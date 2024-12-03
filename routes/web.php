<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/libros', function () {
    return view('libros.index');
});

Route::get('/libros/create', [LibrosController::class,'create']);*/

Route::resource('libros', LibrosController::class);