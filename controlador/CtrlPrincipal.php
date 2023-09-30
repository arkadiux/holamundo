<?php
session_start();

require_once './core/Controlador.php';
# require_once './modelo/Oficina.php';

class CtrlPrincipal extends Controlador {

    public function index(){
        $_SESSION['menu'] = $this->getMenu();
        $datos= [
            'contenido'=>$this->mostrar('principal.php',null,true),
            'menu'=> $_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
        # echo "Hola mundo";
        /* $datos = [
            'titulo'=>'Sexto Semestre',
            'usuario'=>'Walter',
            'menu'=>$this->getMenu()
        ];
        $this->mostrar('home.php',$datos); */
        

    }

    public function getMenu(){
        return [
            #'CtrlCargo'=>'Cargo',
            'CtrlEstado'=>'Estados',
           #'CtrlFactorForma'=>'Factores de Forma',
            #'CtrlConceptoPago'=>'Conceptos de Pago',
            #'CtrlContable'=>'contable',
            'CtrlFichapermanencia'=>'fichapermanencia',
            'CtrlTurno'=>'turno',
            'CtrlMSalida'=>'msalida',
            #'CtrlJustificacionesdeasistencias'=>'Justificacionesdeasistencias',
            'CtrlPapeletasdesalida'=>'Papeletasdesalida',
            'CtrlProgramadeestudios'=>'Programadeestudios',
        ];
    }
}