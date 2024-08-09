<?php

use App\Http\Controllers\AspiranteController;
use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return redirect()->route('aspirantes.index');
});

Route::resource('aspirantes', AspiranteController::class);
Route::resource('estudiantes', EstudianteController::class);
