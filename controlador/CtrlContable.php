<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Contable.php';

class CtrlContable extends Controlador {
    public function index(){
        # echo "Hola Estudiante";
        $obj = new Contable;
        $data = $obj->getTodo();       

        $datos = [
            'titulo'=>'',
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('ctasContables/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'progrma de estudios',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);

    }

    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Contable ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $datos= [
            'titulo'=>'',
            'contenido'=>$this->mostrar('ctasContables/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
        
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Contable;
        $data = $obj->editar();

        $obj = new Contable($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0],
        ];
        $home = $this->mostrar('ctasContables/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar Contable',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
        
    }
    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $esNuevo = $_POST['esNuevo'];

        $obj = new Contable ($id, $nombre,$descripcion);

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