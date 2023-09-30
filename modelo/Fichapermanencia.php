<?php
# require_once './core/Modelo.php';
require_once './core/Modelo.php';

class Fichapermanencia extends Modelo {
    private $id;
    private $idTrabajador;
    private $fecha_ini;
    private $fecha_fin;
    private $_tabla='fichas_permanencia';
    public function __construct($id=null,$idTrabajador=null,$fecha_ini=null,$fecha_fin=null){
        $this->id = $id;
        $this->idTrabajador = $idTrabajador;
        $this->fecha_ini =$fecha_ini;
        $this->fecha_fin =$fecha_fin;
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
            'idTrabajador'=>"'$this->idTrabajador'",
            'fecha_ini'=>"'$this->fecha_ini'",
            'fecha_fin'=>"'$this->fecha_fin'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'idTrabajador'=>"'$this->idTrabajador'",
            'fecha_ini'=>"'$this->fecha_ini'",
            'fecha_fin'=>"'$this->fecha_fin'"
        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}