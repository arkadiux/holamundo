
    <h1><?=$titulo?></h1>
<a href="?ctrl=CtrlPapeletasdesalida&accion=nuevo">Nuevo turno</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>fecha</th>
            <th>hora_retorno</th>
            <th>hora_salida</th>
            <th>sinRetorno</th>
            <th>fecha_ini</th>
            <th>fecha_fin</th>
            <th>idTrabajador</th>
            <th>idJefe</th>
            <th>idMotivo</th>
            <th>Opciones</th>
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
        <?=$d['hora_retorno']?>
    </td>
    <td>
        <?=$d['hora_salida']?>
    </td>
    <td>
        <?=$d['sinRetorno']?>
    </td>
    <td>
        <?=$d['fecha_ini']?>
    </td>
    <td>
        <?=$d['fecha_fin']?>
    </td>
    <td>
        <?=$d['idTrabajador']?>
    </td>
    <td>
        <?=$d['idJefe']?>
    </td>
    <td>
        <?=$d['idMotivo']?>
    </td>
    <td>
        <a href="?ctrl=CtrlPapeletasdesalida&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlPapeletasdesalida&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>