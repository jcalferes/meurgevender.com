
<?php
include './DAOAdministracion/DAO.php';
$dao = new DAO();
try {
    $idImagen = $_GET["id"];
    $sql = "UPDATE imagenes set idSlider ='1' WHERE idImagen ='$idImagen'";
    $dao->ejecutarSentencia($sql);
    $rs = $dao->dameImagenesRecarga();
} catch (Exception $e) {
    $dao->formatoError($e->getMessage());
}
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
    $contador = 1;
    while ($datos = mysql_fetch_array($rs)) {
        ?>
        <tr>
            <td>
                <div class="parent-container">
                    <a href="<?php echo $datos["ruta"]; ?>"><?php echo $datos["ruta"]; ?></a>
                </div>
            </td>
            <td><?php
                if ($datos["idSlider"] == 1) {
                    echo '<a onclick="descartivarImagem(' . $datos["idImagen"] . ');"><span class="glyphicon glyphicon-thumbs-up"></span></a>';
                } else {
                    echo '<a onclick="activarImagen(' . $datos["idImagen"] . ');"><span class="glyphicon glyphicon-thumbs-down"></span></a>';
                }
                ?>
            </td>
        </tr>

        <?php
        $contador = $contador + 1;
    }
}
?>
</table>
