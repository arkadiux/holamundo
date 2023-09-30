<?php
$id = isset($datos['id'])?$datos['id']:'';
$Turno = isset($datos['Turno'])?$datos['Turno']:'';
$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nueva Turno':'Editando Turno';
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
    <form action="?ctrl=CtrlTurno&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        Turno:
        <input class="form-control" type="text" name="Turno" value="<?=$Turno?>">
        <br>
        <input type="submit" value="Guardar">
    </form>

    <a href="?ctrl=CtrlTurno">Retornar</a>
</body>
</html>