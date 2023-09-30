<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <h1><?=$titulo?></h1>
<a href="?ctrl=CtrlJustificacionesdeasistencias&accion=nuevo">Nueva Justificacionesdeasistencias</a>
    <table class="table">
        <tr>
            <th>id</th>
            <th>fecha</th>
            <th>idTurno</th>
            <th>idMotivo</th>
            <th>justificacion</th>
            <th>idTrabajador</th>
            <th>idJefe</th>
        </tr>
<?php
if (is_array($datos))
foreach ($datos as $d) {
    ?>
<tr>
    <td>
        <?=$d['id']?>
    </td>
    <td>
        <?=$d['fecha']?>
    </td>
    <td>
        <?=$d['idTurno']?>
        <td>
        <?=$d['idMotivo']?>
    </td>
    <td>
        <?=$d['justificacion']?>
    </td>
    <td>
        <?=$d['idTrabajador']?>
    </td>
    <td>
        <?=$d['idJefe']?>
    </td>
    </td>
    <td>
        <a href="?ctrl=CtrlJustificacionesdeasistencias&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlJustificacionesdeasistencias&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>