<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Programadeestudios.php';

class CtrlProgramadeestudios extends Controlador {
    public function index(){
        # echo "Hola Estudiante";
        $obj = new Programadeestudio;
        $data = $obj->getTodo();       

        $datos = [
            'titulo'=>'',
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('Programadeestudios/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Programadeestudios',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);

    }

    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Programadeestudio ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $datos= [
            'titulo'=>'',
            'contenido'=>$this->mostrar('Programadeestudios/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
        
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Programadeestudio;
        $data = $obj->editar();

        $obj = new Programadeestudio($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0],
        ];
        $home = $this->mostrar('Programadeestudios/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar Programadeestudios',
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
        $obj = new Programadeestudio ($id, $nombre,$descripcion);

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




