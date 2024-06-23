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

}
