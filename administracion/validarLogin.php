<?php

//
include './DAOAdministracion/DAO.php';
include './Dominios/Usuario.php';
$usuario = new Usuario();
$dao = new DAO();
$usuario->setUsuario($_GET["usuario"]);
$usuario->setPass($_GET["pass"]);
$datos = $dao->validarUsuario($usuario);
if ($datos == 1) {
    echo $datos;
} else if ($datos == 0) {
    echo 0;
} else {
    echo $datos;
}
//echo 1;