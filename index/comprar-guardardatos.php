<?php

include_once './dao/indexdao.php';
include_once './clases/Compra.php';

$dao = new indexdao();
$compra = new Compra();

$dao->comprarGuardarDatos();


