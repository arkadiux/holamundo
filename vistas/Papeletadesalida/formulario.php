<?php
$id = isset($datos['id']) ? $datos['id'] : '';
$fecha = isset($datos['fecha']) ? $datos['fecha'] : '';
$hora_retorno = isset($datos['hora_retorno']) ? $datos['hora_retorno'] : '';
$hora_salida = isset($datos['hora_salida']) ? $datos['hora_salida'] : '';
$sinRetorno = isset($datos['sinRetorno']) ? $datos['sinRetorno'] : '';
$fecha_ini = isset($datos['fecha_ini']) ? $datos['fecha_ini'] : '';
$fecha_fin = isset($datos['fecha_fin']) ? $datos['fecha_fin'] : '';
$idTrabajador = isset($datos['idTrabajador']) ? $datos['idTrabajador'] : '';
$idJefe = isset($datos['idJefe']) ? $datos['idJefe'] : '';
$idMotivo = isset($datos['idMotivo']) ? $datos['idMotivo'] : '';
$esNuevo = empty($id) ? 1 : 0; // Check if 'id' is empty to determine if it's new or edit
$titulo = $esNuevo == 1 ? 'Nueva papeleta de salida' : 'Editando turno'; // Adjust the title accordingly
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?></title>
</head>
<body>
    <h1><?=$titulo?></h1>
    <form action="?ctrl=CtrlPapeletasdesalida&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        fecha:
        <input class="form-control" type="text" name="fecha" value="<?=$fecha?>">
        <br>
        hora_retorno:
        <input class="form-control" type="text" name="hora_retorno" value="<?=$hora_retorno?>">
        <br>
        hora_salida:
        <input class="form-control" type="text" name="hora_salida" value="<?=$hora_salida?>">
        <br>
        sinRetorno:
        <input class="form-control" type="text" name="sinRetorno" value="<?=$sinRetorno?>">
        <br>
        fecha_ini:
        <input class="form-control" type="text" name="fecha_ini" value="<?=$fecha_ini?>">
        <br>
        fecha_fin:
        <input class="form-control" type="text" name="fecha_fin" value="<?=$fecha_fin?>">
        <br>
        idTrabajador:
        <input class="form-control" type="text" name="idTrabajador" value="<?=$idTrabajador?>">
        <br>
        idJefe:
        <input class="form-control" type="text" name="idJefe" value="<?=$idJefe?>">
        <br>
        idMotivo:
        <input class="form-control" type="text" name="idMotivo" value="<?=$idMotivo?>">
        <br>
        
        <input type="submit" value="Guardar">
    </form>
    <a href="?ctrl=CtrlPapeletasdesalida">Retornar</a>
</body>
</html>
