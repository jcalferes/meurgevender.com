<?php

include_once '../DaoConnection/coneccion.php';
include_once './dao/indexdao.php';
include_once './clases/Venta.php';
include_once './clases/Cliente.php';

$cn = new coneccion();
$dao = new indexdao();
$venta = new Venta();
$cliente = new Cliente();

$carpeta = "./imgs-ventas/";
$cont = 0;

$venta->setColonia($_POST["colonia"]);
$venta->setPrecio($_POST["precio"]);
$venta->setMedidas($_POST["medidas"]);
$venta->setHabitaciones($_POST["habitaciones"]);
$venta->setBanos($_POST["banos"]);
$venta->setPisos($_POST["pisos"]);
$venta->setJardin($_POST["jardin"]);
$venta->setPatio($_POST["patio"]);

$venta->setTelefono($_POST["itelefono"]);
$venta->setInternet($_POST["internet"]);
$venta->setTvpaga($_POST["tvpaga"]);

$cliente->setNombre($_POST["nombre"]);
$cliente->setTelefono($_POST["telefono"]);
$cliente->setEmail($_POST["email"]);
$cliente->setDireccion($_POST["direccion"]);
$cliente->setCcolonia($_POST["ccolonia"]);
$cliente->setCp($_POST["cp"]);

$cn->Conectarse();
$ctrl = $dao->venderGuardarDatos($cliente, $venta);
if (!is_resource($ctrl)) {
    echo $ctrl;
} else {
    while ($rs = mysql_fetch_array($ctrl)) {
        $id_venta = $rs["ID"];
    }
}

foreach ($_FILES as $key) {
    if ($key['error'] == UPLOAD_ERR_OK) {//Verificamos si se subio correctamente
        $nombre = $id_venta . '-_-' . $cont . '.jpg'; //Obtenemos el nombre del archivo
        $temporal = $key['tmp_name']; //Obtenemos el nombre del archivo temporal
        $ruta = $carpeta . $nombre;
        $rutas[] = $ruta;
        move_uploaded_file($temporal, $carpeta . $nombre); //Movemos el archivo temporal a la ruta especificada
    } else {
        echo $key['error']; //Si no se cargo mostramos el error
    }
    $cont++;
}

$ctrl = $dao->venderGuardarImgs($id_venta, $rutas);
if ($ctrl != true) {
    echo ctrl;
} else {
    echo 0;
}

$cn->cerrarBd();

