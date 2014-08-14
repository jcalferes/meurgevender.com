<?php

include_once '../DaoConnection/coneccion.php';
include_once './dao/indexdao.php';
include_once './clases/Compra.php';

$cn = new coneccion();
$dao = new indexdao();
$compra = new Compra();

$compra->setColonia($_GET["colonia"]);
$compra->setPrecio($_GET["precio"]);
$compra->setMedidas($_GET["medidas"]);
$compra->setHabitaciones($_GET["habitaciones"]);
$compra->setBanos($_GET["banos"]);
$compra->setPisos($_GET["pisos"]);
$compra->setJardin($_GET["jardin"]);
$compra->setPatio($_GET["patio"]);
$compra->setNombre($_GET["nombre"]);
$compra->setTelefono($_GET["telefono"]);
$compra->setEmail($_GET["email"]);
$compra->setDireccion($_GET["direccion"]);
$compra->setCcolonia($_GET["ccolonia"]);
$compra->setCp($_GET["cp"]);

$cn->Conectarse();
$ctrl = $dao->comprarGuardarDatos($compra);
$cn->cerrarBd();

