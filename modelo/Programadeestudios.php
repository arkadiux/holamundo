<?php
require_once './core/Modelo.php';

class Programadeestudio extends Modelo {
    private $id;
    private $nombre;
    private $logo;
    private $_tabla='programas_estudios';
    

    public function __construct($id=null,$nombre=null,$logo=null){
        $this->id = $id;
        $this->nombre=$nombre;
        $this->logo=$logo;
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
          'nombre'=>$this->nombre,
            'logo'=>"'$this->logo'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'nombre'=>"'$this->nombre'",
            'logo'=>"$this->logo",
        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}