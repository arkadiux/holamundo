<?php
$id = isset($datos['id'])?$datos['id']:'';
$idTrabajador = isset($datos['idTrabajador'])?$datos['idTrabajador']:'';
$fecha_ini = isset($datos['fecha_ini'])?$datos['fecha_ini']:'';
$fecha_fin = isset($datos['fecha_fin'])?$datos['fecha_fin']:'';
$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nueva ficha de permanencia':'Editando fecha';
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
    <form action="?ctrl=CtrlFichapermanencia&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        idTrabajador:
        <input class="form-control" type="text" name="idTrabajador" value="<?=$idTrabajador?>">
        <br>
        fecha_ini:
        <input class="form-control" type="text" name="fecha_ini" value="<?=$fecha_ini?>">
        <br>
        fecha_fin:
        <input class="form-control" type="text" name="fecha_fin" value="<?=$fecha_fin?>">
        <br>
        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlFichapermanencia">Retornar</a>
</body>
</html>