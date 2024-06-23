<?php

use App\Http\Controllers\EstudiantesController;
use Illuminate\Support\Facades\Route;

Route::controller(EstudiantesController::class)->group(function () {
    Route::get('Estudiantes', 'lista')->name('estudiante.lista');
    Route::get('Estudiantes/{id}', 'dato')->name('estudiante.dato');
    Route::put('Estudiantes/{id}', 'editar')->name('estudiante.editar');
    Route::delete('Estudiantes/{id}', 'eliminar')->name('estudiante.eliminar');
});