<?php
$id = isset($datos['id'])?$datos['id']:'';
$motivo = isset($datos['motivo'])?$datos['motivo']:'';
$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nuevo msalida':'Editando msalida';
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
    <form action="?ctrl=CtrlMSalida&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        motivo:
        <input class="form-control" type="text" name="motivo" value="<?=$motivo?>">
        <br>
        <input type="submit" value="Guardar">
    </form>


    <a href="?ctrl=CtrlMSalida">Retornar</a>
</body>
</html>