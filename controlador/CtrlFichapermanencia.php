<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Fichapermanencia.php';

class CtrlFichapermanencia extends Controlador {
    public function index(){
        # echo "Hola Estudiante";
        $obj = new Fichapermanencia;
        $data = $obj->getTodo();       

        $datos = [
            'titulo'=>'',
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('fichapermanencia/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'fecha de permanencia',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);

    }

    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Fichapermanencia ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $datos= [
            'titulo'=>'',
            'contenido'=>$this->mostrar('fichapermanencia/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
        
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Fichapermanencia;
        $data = $obj->editar();

        $obj = new Fichapermanencia($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0],
        ];
        $home = $this->mostrar('fichapermanencia/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar ficha de permanencia',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
        
    }
    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $idTrabajador = $_POST['idTrabajador'];
        $fecha_ini = $_POST['fecha_ini'];
        $fecha_fin = $_POST['fecha_fin'];
        $esNuevo = $_POST['esNuevo'];

        $obj = new Fichapermanencia ($id, $idTrabajador, $fecha_ini, $fecha_fin);

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