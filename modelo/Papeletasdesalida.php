<?php
require_once './core/Modelo.php';

class papeleta extends Modelo {
    private $id;
    private $fecha;
    private $hora_retorno;
    private $hora_salida;
    private $sinRetorno;
    private $fecha_ini;
    private $idTrabajador;
    private $idJefe;
    private $idMotivo;
    private $_tabla='papeletas_salida';

    public function __construct($id=null,$fecha=null,$hora_retorno=null,$hora_salida=null,$sinRetorno=null,$fecha_ini=null,$idTrabajador=null,$idJefe=null,$idMotivo=null){
        $this->id = $id;
        $this->fecha=$fecha;
        $this->hora_retorno=$hora_retorno;
        $this->hora_salida= $hora_salida;
        $this->sinRetorno=$sinRetorno;
        $this->fecha_ini=$fecha_ini;
        $this->idTrabajador=$idTrabajador;
        $this->idJefe=$idJefe;
        $this->idMotivo=$idMotivo;
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
            'fecha'=>$this->fecha,
            'hora_retorno'=>$this->hora_retorno,
            'hora_salida'=>$this->hora_salida,
            'sinRetorno'=>$this->sinRetorno,
            'fecha_ini'=>$this->fecha_ini,
            'idTrabajador'=>$this->idTrabajador,
            'idJefe'=>$this->idJefe,
            'idMotivo'=>"'$this->idMotivo'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'fecha'=>$this->fecha,
            'hora_retorno'=>$this->hora_retorno,
            'hora_salida'=>$this->hora_salida,
            'sinRetorno'=>$this->sinRetorno,
            'fecha_ini'=>$this->fecha_ini,
            'idTrabajador'=>$this->idTrabajador,
            'idJefe'=>$this->idJefe,
            'idMotivo'=>"'$this->idMotivo'",
        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}