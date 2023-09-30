<?php
require_once './core/Modelo.php';

class Justificacionesdeasistencias extends Modelo {
    private $id;
    private $fecha;
    private $idTurno;
    private $idMotivo;
    private $justificacion;
    private $idTrabajador;
    private $idJefe;
    private $_tabla='justificaciones_asistencia';

    public function __construct($id=null,$fecha=null,$idTurno=null,$idMotivo=null,$justificacion=null,$idTrabajador=null,$idJefe=null){
        $this->id = $id;
        $this->fecha=$fecha;
        $this->idTurno=$idTurno;
        $this->idMotivo= $idMotivo;
        $this->justificacion=$justificacion;
        $this->idTrabajador=$idTrabajador;
        $this->idJefe=$idJefe;
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
            'idTurno'=>$this->idTurno,
            'idMotivo'=>$this->idMotivo,
            'justificacion'=>$this->justificacion,
            'idTrabajador'=>$this->idTrabajador,
            'idJefe'=>"'$this->idJefe'",
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
            'idTurno'=>$this->idTurno,
            'idMotivo'=>$this->idMotivo,
            'justificacion'=>$this->justificacion,
            'idTrabajador'=>$this->idTrabajador,
            'idJefe'=>"'$this->idJefe'"
        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}