<?php

namespace App;

class MateriaClass
{
    private $dataBaseCLass;

    public function __construct(DataBaseCLass $dataBaseCLass)
    {
        $this->dataBaseCLass = $dataBaseCLass;
    }

    public function lista(){
        $datos = $this->dataBaseCLass->materiaLista();
        return $datos;
    }

    public function crear($datos){
        $this->dataBaseCLass->materiaCrear($datos);
    }

    // public function editar($datos, $id){
    //     $this->dataBaseCLass->materiaEditar($datos, $id);
    // }

    // public function eliminar($id){
    //     $this->dataBaseCLass->materiaEliminar($id);
    // }

    // public function resetTabla($datos){
    //     $eliminado = false;
    //     if ($datos == 'baja') {
    //         $this->dataBaseCLass->materiaReset(); 
    //         $eliminado = true;
    //     }
    //     return $eliminado;
    // }

    
}
