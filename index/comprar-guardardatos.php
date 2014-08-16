<?php

include_once '../DaoConnection/coneccion.php';
include_once './dao/indexdao.php';
include_once './clases/Compra.php';
include_once './clases/Cliente.php';

$cn = new coneccion();
$dao = new indexdao();
$compra = new Compra();
$cliente = new Cliente();

$compra->setColonia($_POST["colonia"]);
$compra->setPrecio($_POST["precio"]);
$compra->setMedidas($_POST["medidas"]);
$compra->setHabitaciones($_POST["habitaciones"]);
$compra->setBanos($_POST["banos"]);
$compra->setPisos($_POST["pisos"]);
$compra->setJardin($_POST["jardin"]);
$compra->setPatio($_POST["patio"]);
$cliente->setNombre($_POST["nombre"]);
$cliente->setTelefono($_POST["telefono"]);
$cliente->setEmail($_POST["email"]);
$cliente->setDireccion($_POST["direccion"]);
$cliente->setCcolonia($_POST["ccolonia"]);
$cliente->setCp($_POST["cp"]);

$cn->Conectarse();
$ctrl = $dao->comprarGuardarDatos($cliente, $compra);
//$tester =  is_resource($ctrl);
if ($ctrl == 'true') {
    echo 0;
} else {
    echo $ctrl;
}
$cn->cerrarBd();

