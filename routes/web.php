<?php

use App\Http\Controllers\Estudiantes\EstudiantesController;
use App\Http\Controllers\Notas\NotasController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Estudiante;
use App\Models\Notas;

Route::get('/', function () {

    /*$estudiante = new Estudiante();
    $estudiante -> nombres = 'Jose';
    $estudiante -> pri_ape = 'Sanchez';
    $estudiante -> seg_ape = 'Carrion';
    $estudiante -> save ();

    return $estudiante;*/

    //return 'Aqui trabajare';

    return view('welcome');
});

Route::get('/', function () {

    /*$nota = new Notas();
    $nota->estudiante_id = 1;
    $nota -> materia = 'Matematica';
    $nota -> nota = 20;
    $nota -> save ();*/

    //return $nota;

    //return 'Estas son mis notas';

    return view('welcome');
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

/*Route::get('/estudiantes',  function () {
    return view:make('estudiantes');
})->name('estudiantes');*/

/*Route::get('/notas',  function () {
    return view:make('notas');
})->name('notas');*/

Route::post('/estudiantes/store', [EstudiantesController::class, 'store'])->name('estudiantes.store');
Route::post('/estudiantes', [EstudiantesController::class, 'store'])->name('estudiantes.store');
Route::get('/estudiantes/index', [EstudiantesController::class, 'index'])->name('estudiantes.index');
Route::get('/estudiantes/create', [EstudiantesController::class, 'create'])->name('estudiantes.create');
Route::get('/estudiantes/edit/{id}', [EstudiantesController::class, 'edit'])->name('estudiantes.edit');
Route::post('/estudiantes/update', [EstudiantesController::class, 'update'])->name('estudiantes.update');

Route::get('/Notas/index', [NotasController::class, 'index'])->name('Notas.index');
Route::get('/Notas/create', [NotasController::class, 'create'])->name('Notas.create');
