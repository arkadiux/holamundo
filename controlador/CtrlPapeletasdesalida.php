
<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Papeletasdesalida.php';

class CtrlPapeletasdesalida extends Controlador {
    public function index(){
        # echo "Hola Estudiante";
        $obj = new papeleta;
        $data = $obj->getTodo();       

        $datos = [
            'titulo'=>'',
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('Papeletadesalida/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'papeleta de salida',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);

    }

    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new papeleta ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $datos= [
            'titulo'=>'',
            'contenido'=>$this->mostrar('Papeletadesalida/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
        
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new papeleta($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $this->mostrar('Papeletadesalida/formulario.php',$datos);
        $datos= [
            'titulo'=>'fecha de Papeleta de salida',
            'contenido'=>$home,
 
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }
    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $fecha = $_POST['fecha'];
        $hora_retorno = $_POST['hora_retorno'];
        $hora_salida = $_POST['hora_salida'];
        $sinRetorno = $_POST['sinRetorno'];
        $fecha_ini = $_POST['fecha_ini'];
        $fecha_fin = $_POST['fecha_fin'];
        $idTrabajador = $_POST['idTrabajador'];
        $idJefe = $_POST['idJefe'];
        $idMotivo = $_POST['idMotivo'];
        $esNuevo = $_POST['esNuevo'];

        $obj = new papeleta ($id, $fecha,$hora_retorno,$hora_salida,$sinRetorno,$fecha_ini,$fecha_fin,$idTrabajador,$idJefe,$idMotivo);

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