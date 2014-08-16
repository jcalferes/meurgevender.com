<?php

include_once '../DaoConnection/coneccion.php';
include_once './dao/indexdao.php';
include_once './clases/Compra.php';

$cn = new coneccion();
$dao = new indexdao();
$compra = new Compra();

$compra->setColonia($_POST["colonia"]);
$compra->setPrecio($_POST["precio"]);
$compra->setMedidas($_POST["medidas"]);
$compra->setHabitaciones($_POST["habitaciones"]);
$compra->setBanos($_POST["banos"]);
$compra->setPisos($_POST["pisos"]);
$compra->setJardin($_POST["jardin"]);
$compra->setPatio($_POST["patio"]);
$compra->setNombre($_POST["nombre"]);
$compra->setTelefono($_POST["telefono"]);
$compra->setEmail($_POST["email"]);
$compra->setDireccion($_POST["direccion"]);
$compra->setCcolonia($_POST["ccolonia"]);
$compra->setCp($_POST["cp"]);

$cn->Conectarse();
$ctrl = $dao->comprarGuardarDatos($compra);
$cn->cerrarBd();

