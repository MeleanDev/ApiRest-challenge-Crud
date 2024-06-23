<?php

use App\Http\Controllers\EstudiantesController;
use Illuminate\Support\Facades\Route;

Route::controller(EstudiantesController::class)->group(function () {
    Route::get('Estudiantes', 'lista');
    Route::post('Estudiantes', 'crear');
    Route::get('Estudiantes/{id}', 'dato');
    Route::put('Estudiantes/{id}', 'editar');
    Route::delete('Estudiantes/{id}', 'eliminar');
    Route::post('Estudiantes/Resete', 'reset');
});