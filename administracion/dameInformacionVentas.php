<?php
include './DAOAdministracion/DAO.php';
$dao = new dao();
$datos = $dao->dameInformacionVenta();
if ($datos == false) {
    echo mysql_error();
}
?>
<table class="table table-hover" id="tablaInformacion">
    <thead>
    <th>Nombre</th>
    <th>Colonia</th>
    <th>Direccion</th>
    <th>Detalles</th>
</thead>
<?php
while ($rs = mysql_fetch_array($datos)) {
    ?>
    <tr>
        <td><?php echo $rs["nombre"]; ?></td>
        <td><?php echo $rs["colonia"]; ?></td>
        <td><?php echo $rs["direccion"]; ?></td>
        <td><span class="glyphicon glyphicon-list-alt"></span></td>
    </tr>
    <?php
}
?>
</table>