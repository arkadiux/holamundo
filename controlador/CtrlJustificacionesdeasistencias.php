<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Justificacionesdeasistencias.php';

class CtrlJustificacionesdeasistencias extends Controlador {
    public function index(){
        # echo "Hola Estudiante";
        $obj = new Justificacionesdeasistencias;
        $data = $obj->getTodo();       

        $datos = [
            'titulo'=>'',
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('Justificacionesdeasistencia/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'fecha de justificacion',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);

    }

    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Justificacionesdeasistencias ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $datos= [
            'titulo'=>'',
            'contenido'=>$this->mostrar('Justificacionesdeasistencia/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
        
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Justificacionesdeasistencias;
        $data = $obj->editar();

        $obj = new Justificacionesdeasistencias($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0],
        ];
        $home = $this->mostrar('Justificacionesdeasistencia/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar fecha',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
        
    }
    
     # var_dump($data);exit;
    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $fecha = $_POST['fecha'];
        $idTurno = $_POST['idTurno'];
        $idMotivo = $_POST['idMotivo'];
        $justificacion = $_POST['justificacion'];
        $idTrabajador = $_POST['idTrabajador'];
        $idJefe = $_POST['idJefe'];
        $esNuevo = $_POST['esNuevo'];

        $obj = new Justificacionesdeasistencias ($id, $fecha,$idTurno,$descripcion,$idMotivo,$justificacion,$idTrabajador,$idJefe);


        switch ($esNuevo) {
            case 0: # Editar
                $data=$obj->actualizar();
                break;
            
            default: # Nuevo
                $data=$obj->guardar();
                break;
        }

        
        # var_dump($data);exit;
        $this->index();

    }
}



































