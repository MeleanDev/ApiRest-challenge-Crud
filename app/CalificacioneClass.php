<?php

namespace App;

use App\Models\Estudiantes;
use App\Models\Materia;

class CalificacioneClass
{
    private $dataBaseCLass;

    public function __construct(DataBaseCLass $dataBaseCLass)
    {
        $this->dataBaseCLass = $dataBaseCLass;
    }

    public function lista(){
        $datos = $this->dataBaseCLass->calificacioneLista();
        return $datos;
    }

    public function crear($datos){
        $this->dataBaseCLass->calificacioneCrear($datos);
    }

    public function dato($id){
        $estudiante = Estudiantes::find($id->estudiantes_id);
        $materia = Materia::find($id->materia_id);
        $id->estudiante = $estudiante->nombre.' '.$estudiante->apellido;
        $id->materia = $materia->nombre;
        return $id;
    }

    public function editar($datos, $id){
        $this->dataBaseCLass->calificacioneEditar($datos, $id);
    }

    public function eliminar($id){
        $this->dataBaseCLass->calificacioneEliminar($id);
    }

    public function resetTabla($datos){
        $eliminado = false;
        if ($datos == 'baja') {
            $this->dataBaseCLass->calificacioneReset(); 
            $eliminado = true;
        }
        return $eliminado;
    }
}
