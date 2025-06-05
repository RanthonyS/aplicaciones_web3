<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\EstudiantesController;


Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/notas', function () {
    return view('notas');
});

Route::get('/matricula', function () {
    return view('matricula');
});

Route::get('/contactos', function () {
    return view('contactos');
}); */
Route::get('/notas/mostrar', [NotasController::class,"index"]);
Route::get('/notas/crear', [NotasController::class,"crear"]);
Route::get('/notas/editar', [NotasController::class,"editar"]);
Route::get('/notas/eliminar', [NotasController::class,"eliminar"]);

Route::get('/materias/editar', [MateriasController::class,"editar"]);
Route::get('/materias/eliminar', [MateriasController::class,"eliminar"]);
Route::get('/materias/mostrar', [MateriasController::class,"mostrar"]);

Route::get('/estudiantes/crear', [EstudiantesController::class,"crear"]);
Route::get('/estudiantes/editar', [EstudiantesController::class,"editar"]);
Route::get('/estudiantes/eliminar', [EstudiantesController::class,"eliminar"]);
Route::get('/estudiantes/mostrar', [EstudiantesController::class,"mostrar"]);