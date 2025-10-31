<?php

use App\Http\Controllers\Estudiantes\EstudiantesController;
use App\Http\Controllers\notas\NotasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\View;
use App\Models\{Comentario,Estudiante};
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

HEAD
    /*$nota = new notas();


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

Route::get('/estudiantes/index', [EstudiantesController::class, 'index'])->name('estudiantes.index');
Route::get('/estudiantes/create', [EstudiantesController::class, 'create'])->name('estudiantes.create');
Route::post('/estudiantes/store', [EstudiantesController::class, 'store'])->name('estudiantes.store');
Route::get('/estudiantes/edit/{id}', [EstudiantesController::class, 'edit'])->name('estudiantes.edit');
Route::post('/estudiantes/update/{estudiante}', [EstudiantesController::class, 'update'])->name('estudiantes.update');
Route::get('/estudiantes/delete/{id}', [EstudiantesController::class, 'delete'])->name('estudiantes.delete');
Route::post('/estudiantes/destroy/{estudiante}', [EstudiantesController::class, 'destroy'])->name('estudiantes.destroy');
Route::get('/estudiantes/ver/{id}', [EstudiantesController::class, 'ver'])->name('estudiantes.ver');



 HEAD
Route::get('/notas/index', [notasController::class, 'index'])->name('notas.index');
Route::get('/notas/create', [notasController::class, 'create'])->name('notas.create');
Route::post('/notas/store', [notasController::class, 'store'])->name('notas.store');
Route::get('/notas/edit/{id}', [notasController::class, 'edit'])->name('notas.edit');
Route::post('/notas/update/{notas}', [notasController::class, 'update'])->name('notas.update');
Route::get('/notas/delete/{id}', [notasController::class, 'delete'])->name('notas.delete');
Route::post('/notas/destroy/{notas}', [notasController::class, 'destroy'])->name('notas.destroy');
Route::get('/notas/ver/{id}', [notasController::class, 'ver'])->name('notas.ver');

Route::get('/', [LoginController::class, 'showLoginForm']);
// Rutas de autenticación 
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Ruta Welcome para el profesor
Route::get('/welcome', function () {
    return view('welcome'); 
})->middleware('auth')->name('welcome');

