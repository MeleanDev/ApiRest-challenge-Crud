<?php

namespace App;

use App\Models\Calificacione;
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
            $materia = new Materia();
            $materia->nombre = $datos->nombre;
            $materia->save();
        }

        // Editar
        public function materiaEditar($datos ,$id){
            $id->nombre = $datos->nombre;
            $id->save();
        }

        // Eliminar
        public function materiaEliminar($id){
            $id->delete();
        }

        // Truncate
        public function materiaReset(){
            Materia::truncate();
        }
    
    // Calificaciones
        // Lista
        public function calificacioneLista(){
            $datos = Calificacione::all();
            return $datos;
        }

        // Crear
        public function calificacioneCrear($datos){
            $califi = new Calificacione();
            $califi->materia_id = $datos->materia_id;
            $califi->estudiantes_id = $datos->estudiantes_id;
            $califi->nota = $datos->nota;
            $califi->save();
        }

        // Editar
        public function calificacioneEditar($datos ,$id){
            $id->materia_id = $datos->materia_id;
            $id->estudiantes_id = $datos->estudiantes_id;
            $id->nota = $datos->nota;
            $id->save();
        }

        // Eliminar
        public function calificacioneEliminar($id){
            $id->delete();
        }

        // Truncate
        public function calificacioneReset(){
            Calificacione::truncate();
        }


}
