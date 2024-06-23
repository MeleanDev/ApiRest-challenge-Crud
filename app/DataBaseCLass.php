<?php

namespace App;

use App\Models\Estudiantes;

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

}
