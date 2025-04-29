<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/notas', function () {
    return view('notas');
});

Route::get('/matricula', function () {
    return view('matricula');
});

Route::get('/contactos', function () {
    return view('contactos');
});