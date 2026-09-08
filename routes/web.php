<?php

use Illuminate\Support\Facades\Route;
use App\Models\Nota;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

//Añadido para el trabajo de yield, stack, push.
Route::get('/notas', function () {
    $notas = Nota::with('estudiante')->get();
    return view('tabla-notas', compact('notas'));
});