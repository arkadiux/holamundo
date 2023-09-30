<h1><?=$titulo?></h1>
<a href="?ctrl=CtrlMSalida&accion=nuevo">Motivo Salida</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>motivo</th>
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
        <?=$d['motivo']?>
    </td>
    <td>
        <a href="?ctrl=CtrlMSalida&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlMSalida&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>

    