<?php

use Illuminate\Support\Facades\Route;






Route::get('/', function () {
    return view('inicio');
});

Auth::routes();

require 'admin.php';


Route::view('/inicio', 'inicio');
Route::view('/nosotros', 'nosotros');
Route::view('/contacto', 'contacto');
Route::resource('/eventos', 'App\Http\Controllers\EventosController');
Route::view('/documentos', 'documentos');
