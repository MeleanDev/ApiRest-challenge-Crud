<?php

namespace App;

class EstudianteClass
{

    private $dataBaseCLass;

    public function __construct(DataBaseCLass $dataBaseCLass)
    {
        $this->dataBaseCLass = $dataBaseCLass;
    }

    public function lista(){
        $datos = $this->dataBaseCLass->estudianteLista();
        return $datos;
    }

    public function crear($datos){
        $this->dataBaseCLass->estudianteCrear($datos);
    }

    public function editar($datos, $id){
        $this->dataBaseCLass->estudianteEditar($datos, $id);
    }

    public function eliminar($id){
        $this->dataBaseCLass->estudianteEliminar($id);
    }

}
