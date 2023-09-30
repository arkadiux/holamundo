<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/MSalida.php';

class CtrlMSalida extends Controlador {
    public function index(){
        # echo "Hola Estudiante";
        $obj = new MSalida;
        $data = $obj->getTodo();       

        $datos = [
            'titulo'=>'',
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('msalida/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'msalida',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);

    }

    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new MSalida ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $datos= [
            'titulo'=>'',
            'contenido'=>$this->mostrar('msalida/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
        
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new MSalida;
        $data = $obj->editar();

        $obj = new MSalida($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0],
        ];
        $home = $this->mostrar('msalida/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar MSalida',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
        
    }
    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $motivo = $_POST['motivo'];
        $esNuevo = $_POST['esNuevo'];

        $obj = new MSalida ($id, $motivo);

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