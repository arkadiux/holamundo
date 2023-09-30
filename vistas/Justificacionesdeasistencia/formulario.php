<?php
$id = isset($datos['id'])?$datos['id']:'';
$fecha = isset($datos['fecha'])?$datos['fecha']:'';
$idTurno = isset($datos['idTurno'])?$datos['idTurno']:'';
$idMotivo = isset($datos['idMotivo'])?$datos['idMotivo']:'';
$justificacion = isset($datos['justificacion'])?$datos['justificacion']:'';
$idTrabajador = isset($datos['idTrabajador'])?$datos['idTrabajador']:'';
$idJefe = isset($datos['idJefe'])?$datos['idJefe']:'';
$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nueva justificacion. Contable':'Editando Cta. Contable';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?=$titulo?></h1>
    <form action="?ctrl=CtrlJustificacionesdeasistencias&accion=guardar" method="post">
        id:
        <input type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        fecha:
        <input type="text" name="fecha" value="<?=$fecha?>">
        <br>
        idTurno:
        <input type="text" name="idTurno" value="<?=$idTurno?>">
        <br>
        idMotivo:
        <input type="text" name="idMotivo" value="<?=$idMotivo?>">
        <br>
        justificacion:
        <input type="text" name="justificacion" value="<?=$justificacion?>">
        <br>
        idTrabajador:
        <input type="text" name="idTrabajador" value="<?=$idTrabajador?>">
        <br>
        idJefe:
        <input type="text" name="idJefe" value="<?=$idJefe?>">
        <br>
        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlJustificacionesdeasistencias">Retornar</a>
</body>
</html>