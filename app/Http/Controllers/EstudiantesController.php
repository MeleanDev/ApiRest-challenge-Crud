<?php

namespace App\Http\Controllers;

use App\EstudianteClass;
use App\Http\Requests\EstudiantesRequest;

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

}
