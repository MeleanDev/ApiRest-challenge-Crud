<?php

namespace App\Http\Controllers;

use App\EstudianteClass;
use App\Http\Requests\EstudiantesRequest;
use App\Models\Estudiantes;

class EstudiantesController extends Controller
{
    private $EstudianteClass;

    public function __construct(EstudianteClass $EstudianteClass)
    {
        $this->EstudianteClass = $EstudianteClass;
    }

    public function lista(){
        $datos = $this->EstudianteClass->lista();
        if ($datos->isEmpty()) {
            return response()->json(['message' => 'No se encuentran registros'], 200);
        }
        return response()->json(['message' => $datos], 200);
    }

    public function crear(EstudiantesRequest $datos){
        try {
            $this->EstudianteClass->crear($datos);
            return response()->json(['message' => 'Registro exitoso'], 201);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Error en el registro'], 400);
        }
        $this->EstudianteClass->crear($datos);
    }

    public function dato(Estudiantes $id){
        try {
            return response()->json(['message' => $id], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $id], 404);
        }
    }

    public function editar(EstudiantesRequest $datos, Estudiantes $id){
        try {
            $this->EstudianteClass->editar($datos, $id);
            return response()->json(['message' => 'Registro editado con exito'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Error!!'], 400);
        }
    }

    public function eliminar(Estudiantes $id){
        try {
            $this->EstudianteClass->eliminar($id);
            return response()->json(['message' => 'Eliminacion exitosa'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Error!!'], 404);
        }
    }

}
