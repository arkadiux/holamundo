<?php
$id = isset($datos['id'])?$datos['id']:'';
$nombre = isset($datos['nombre'])?$datos['nombre']:'';
$logo = isset($datos['logo'])?$datos['logo']:'';


$esNuevo = isset($datos['id'])?0:1;
$titulo = $esNuevo==1?'Nuevo Programadeestudios':'Editando Programadeestudios';
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
    <form action="?ctrl=CtrlProgramadeestudios&accion=guardar" method="post">
        id:
        <input class="form-control" type="text" name="id" value="<?=$id?>">
        <input type="hidden" name="esNuevo" value="<?=$esNuevo?>">
        <br>
        Nombre:
        <input class="form-control" type="text" name="nombre" value="<?=$nombre?>">
        <br>
        logo:
        <input class="form-control" type="text" name="logo" value="<?=$logo?>">
        <br>
    

        <input type="submit" value="Guardar">

    </form>

    <a href="?ctrl=CtrlProgramadeestudios">Retornar</a>
</body>
</html>