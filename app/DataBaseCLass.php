<?php

namespace App;

use App\Models\Estudiantes;
use App\Models\Materia;

class DataBaseCLass
{

    // Estudiantes
        // Lista
        public function estudianteLista(){
            $datos = Estudiantes::all();
            return $datos;
        }

        // Crear
        public function estudianteCrear($datos){
            $estud = new Estudiantes();
            $estud->nombre = $datos->nombre;
            $estud->apellido = $datos->apellido;
            $estud->cedula = $datos->cedula;
            $estud->fecha_nacimiento = $datos->fecha_nacimiento;
            $estud->save();
        }

        // Editar
        public function estudianteEditar($datos ,$id){
            $id->nombre = $datos->nombre;
            $id->apellido = $datos->apellido;
            $id->cedula = $datos->cedula;
            $id->fecha_nacimiento = $datos->fecha_nacimiento;
            $id->save();
        }

        // Eliminar
        public function estudianteEliminar($id){
            $id->delete();
        }

        // Truncate
        public function estudianteReset(){
            Estudiantes::truncate();
        }

    // Materia
        // Lista
        public function materiaLista(){
            $datos = Materia::all();
            return $datos;
        }

        // Crear
        public function materiaCrear($datos){
            $estud = new Materia();
            $estud->nombre = $datos->nombre;
            $estud->save();
        }

        // // Editar
        // public function materiaEditar($datos ,$id){
        //     $id->nombre = $datos->nombre;
        //     $id->apellido = $datos->apellido;
        //     $id->cedula = $datos->cedula;
        //     $id->fecha_nacimiento = $datos->fecha_nacimiento;
        //     $id->save();
        // }

        // // Eliminar
        // public function materiaEliminar($id){
        //     $id->delete();
        // }

        // // Truncate
        // public function materiaReset(){
        //     Materia::truncate();
        // }


}
