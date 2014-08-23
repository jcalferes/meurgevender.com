<?php

include './DAOAdministracion/DAO.php';
$dao = new DAO();
$target_path = "../index/imgs-slider/";
$target_path = $target_path . basename($_FILES['uploadedfile']['name']);
if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    $ruta = $target_path . $_FILES['uploadedfile'][''];
    try {
        $sql = "INSERT INTO imagenes (idDatosVenderCasa, ruta, idSlider) VALUES ('0','$ruta','1')";
        $dao->ejecutarSentencia($sql);
        header('Location: subirImagen.php');
    } catch (Exception $e) {
        $dao->formatoError($e->getMessage());
    }
} else {
    echo "Ha ocurrido un error, trate de nuevo!";
}
?>