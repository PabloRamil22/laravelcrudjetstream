<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ligasController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Ruta para el controlador de estudiantes
    Route::resource('students', StudentController::class);

    // Ruta para el controlador de equipos
    Route::resource('equipos', EquipoController::class);
    Route::resource('ligas', ligasController::class);
});
