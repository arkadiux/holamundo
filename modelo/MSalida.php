<?php
# require_once './core/Modelo.php';
require_once 'Persona.php';

class MSalida extends Modelo {
    private $id;
    private $motivo;
    private $_tabla='motivos_salida';
    public function __construct($id=null,$motivo=null){
        $this->id = $id;
        $this->motivo=$motivo;
        parent::__construct($this->_tabla);
    }
    public function getTodo(){
        return $this->getAll();
    }
    public function eliminar(){
        return $this->deleteById($this->id);
    }
    public function guardar(){
        $datos = [
            'id'=>$this->id,
            'motivo'=>"'$this->motivo'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'motivo'=>"'$this->motivo'",
        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}