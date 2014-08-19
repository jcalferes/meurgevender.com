
<?php
include './DAOAdministracion/DAO.php';
$dao = new DAO();
$rs = $dao->dameImagenes();
?>

<table id="table" class="table table-hover">
    <thead>
    <th>
        Imagen
    </th>
    <th>
        Activar Slider
    </th>
</thead>
<?php
if ($rs == false) {
    ?>
    <tr>
        <td colspan="2">
            <?php echo mysql_error(); ?>
        </td>
    </tr>
    <?php
} else {
    while ($datos = mysql_fetch_array($rs)) {
        ?>
        <tr>
            <td><?php echo $datos["ruta"]; ?></td>
            <td><?php
                if ($datos["idSlider"] == 1) {
                    echo '<a href="#"><span class="glyphicon glyphicon-thumbs-up"></span></a>';
                } else {
                    echo '<a href="#"><span class="glyphicon glyphicon-thumbs-down"></span></a>';
                }
                ?></td>
        </tr>
    <?php
    }
}
?>
</table>
