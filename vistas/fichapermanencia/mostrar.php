<h1><?=$titulo?></h1>
<a href="?ctrl=CtrlFichapermanencia&accion=nuevo">Nueva fecha</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>idTrabajador</th>
            <th>fecha_ini</th>
            <th>fecha_fin</th>
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
        <?=$d['idTrabajador']?>
    </td>
    <td>
        <?=$d['fecha_ini']?>
    </td>
    <td>
        <?=$d['fecha_fin']?>
    </td>
    <td>
        <a href="?ctrl=CtrlFichapermanencia&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlFichapermanencia&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>

    