<?php

use App\Http\Controllers\CalificacioneController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

// Estudiantes
Route::controller(EstudiantesController::class)->group(function () {
    Route::get('Estudiantes', 'lista');
    Route::post('Estudiantes', 'crear');
    Route::get('Estudiantes/{id}', 'dato');
    Route::put('Estudiantes/{id}', 'editar');
    Route::delete('Estudiantes/{id}', 'eliminar');
    Route::post('Estudiantes/Resete', 'reset');
});

// Materias
Route::controller(MateriaController::class)->group(function () {
    Route::get('Materias', 'lista');
    Route::post('Materias', 'crear');
    Route::get('Materias/{id}', 'dato');
    Route::put('Materias/{id}', 'editar');
    Route::delete('Materias/{id}', 'eliminar');
    Route::post('Materias/Resete', 'reset');
});

// calificacion
Route::controller(CalificacioneController::class)->group(function () {
    Route::get('Calificacion', 'lista');
    Route::post('Calificacion', 'crear');
    Route::get('Calificacion/{id}', 'dato');
    Route::put('Calificacion/{id}', 'editar');
    Route::delete('Calificacion/{id}', 'eliminar');
    Route::post('Calificacion/Resete', 'reset');
});
