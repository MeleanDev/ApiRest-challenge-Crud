<?php

namespace App\Http\Controllers;

use App\Http\Requests\MateriaRequest;
use App\MateriaClass;
use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    private $materiaClass;

    public function __construct(MateriaClass $materiaClass)
    {
        $this->materiaClass = $materiaClass;
    }

    public function lista(){
        $datos = $this->materiaClass->lista();
        if ($datos->isEmpty()) {
            return response()->json(['message' => 'No se encuentran registros'], 200);
        }
        return response()->json(['message' => $datos], 200);
    }

    public function crear(MateriaRequest $datos){
        try {
            $this->materiaClass->crear($datos);
            return response()->json(['message' => 'Registro exitoso'], 201);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Error en el registro'], 400);
        }
    }

    public function dato(Materia $id){
        try {
            return response()->json(['message' => $id], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $id], 404);
        }
    }

    public function editar(MateriaRequest $datos, Materia $id){
        try {
            $this->materiaClass->editar($datos, $id);
            return response()->json(['message' => 'Registro editado con exito'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Error!!'], 400);
        }
    }

    // public function eliminar(Materia $id){
    //     try {
    //         $this->materiaClass->eliminar($id);
    //         return response()->json(['message' => 'Eliminacion exitosa'], 200);
    //     } catch (\Throwable $th) {
    //         return response()->json(['message' => 'Error!!'], 404);
    //     }
    // }

    // public function reset(Request $dato){
    //     $eliminacion = $this->materiaClass->resetTabla($dato->baja);
    //     if ($eliminacion == true) return response()->json(['message' => 'Todos los registros eliminado'], 200);
    //     return response()->json(['message' => 'Registros no eliminado'], 400);
    // }
}
