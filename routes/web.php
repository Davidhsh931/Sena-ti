<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Estudiante;

Route::get('/', function () {

    $estudiante = new Estudiante();
    $estudiante -> nombres = 'Jose';
    $estudiante -> pri_ape = 'Sanchez';
    $estudiante -> seg_ape = 'Carrion';
    $estudiante -> save ();

    return $estudiante;

    //return 'Aqui trabajare';

    //return view('welcome');
});

Route::get('/saludos', function ()  {
return 'Hola mi king';
})->name('saludos');

Route::get('/bienvenidos',  function () {
    return view('bienvenido');
})->name('bienvenidos');

Route::get('/dudoso',  function () {
    return view('dudoso');
})->name('dudoso');