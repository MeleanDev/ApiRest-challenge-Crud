<?php

namespace App\Http\Controllers;

use App\CalificacioneClass;
use App\Http\Requests\CalificacioneRequest;
use App\Models\Calificacione;
use Illuminate\Http\Request;

class CalificacioneController extends Controller
{
    private $calificacioneClass;

    public function __construct(CalificacioneClass $calificacioneClass)
    {
        $this->calificacioneClass = $calificacioneClass;
    }

    public function lista(){
        $datos = $this->calificacioneClass->lista(); // enviar nombre y del estudiante y materia
        if ($datos->isEmpty()) {
            return response()->json(['message' => 'No se encuentran registros'], 200);
        }
        return response()->json(['message' => $datos], 200);
    }

    public function crear(CalificacioneRequest $datos){
        try {
            $this->calificacioneClass->crear($datos);
            return response()->json(['message' => 'Registro exitoso'], 201);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Error en el registro'], 400);
        }
    }

    public function dato(Calificacione $id){
        try {
            $id = $this->calificacioneClass->dato($id);
            return response()->json(['message' => $id], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $id], 404);
        }
    }

    public function editar(CalificacioneRequest $datos, Calificacione $id){
        try {
            $this->calificacioneClass->editar($datos, $id);
            return response()->json(['message' => 'Registro editado con exito'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Error!!'], 400);
        }
    }

    public function eliminar(Calificacione $id){
        try {
            $this->calificacioneClass->eliminar($id);
            return response()->json(['message' => 'Eliminacion exitosa'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Error!!'], 404);
        }
    }

    public function reset(Request $dato){
        $eliminacion = $this->calificacioneClass->resetTabla($dato->baja);
        if ($eliminacion == true) return response()->json(['message' => 'Todos los registros eliminado'], 200);
        return response()->json(['message' => 'Registros no eliminado'], 400);
    }
}
