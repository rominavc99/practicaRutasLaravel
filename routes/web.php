<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('notas', function () {

    $notas = [

    ];

    return view('notas', ['notas' => $notas]);
});

Route::get('notas/agregar', function () {
    return view('agregar');
});

Route::get('notas/{id}/detalles', function ($id) {
    return 'Aqui se muestran los detalles de la nota: ' .$id;
});

Route::get('notas/crear', function () {
    return 'aqui se crea una nueva nota';
});

Route::get('notas/listar', function () {
    return 'aqui se listan las notas';
});

Route::get('notas/editar', function () {
    return 'aqui se editan las notas';
});

