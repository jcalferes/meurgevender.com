<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAO
 *
 * @author Comodoro
 */
class DAO {

    function validarUsuario(Usuario $usuario) {
        include '../DaoConnection/coneccion.php';
        $cn = new coneccion();
        $sqlValidar = "SELECT * FROM usuario WHERE usuario ='" . $usuario->getUsuario() . "' and pass='" . md5($usuario->getPass()) . "'";
        $datos = mysql_query($sqlValidar, $cn->Conectarse());
        $respuesta = "";
        if ($datos == false) {
            $respuesta = mysql_error();
        } else {
            $respuesta = mysql_affected_rows();
        }
        $cn->cerrarBd();
        return $respuesta;
    }

}
