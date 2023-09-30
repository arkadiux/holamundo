<h1><?=$titulo?></h1>
<a href="?ctrl=CtrlTurno&accion=nuevo">Nuevo Turno</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>turno</th>
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
        <?=$d['Turno']?>
    </td>
    <td>
        <a href="?ctrl=CtrlTurno&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlTurno&accion=eliminar&id=<?=$d['id']?>">
        Eliminar</a>
        
    </td>
</tr>
s
<?php
}
?>

    </table>

    <a href="?">Retornar</a>

    