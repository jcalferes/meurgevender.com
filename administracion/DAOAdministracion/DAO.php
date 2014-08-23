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

    function dameInformacionVenta() {
        include '../DaoConnection/coneccion.php';
        $cn = new coneccion();
        $sql = "select * from datosvendercasa dv 
                inner join clientes cl 
                on dv.idClientes = cl.idClientes";
        $datos = mysql_query($sql, $cn->Conectarse());
        return $datos;
    }

    function dameImagenes() {
        include '../DaoConnection/coneccion.php';
        $cn = new coneccion();
        $sql = "SELECT * FROM imagenes";
        $rs = mysql_query($sql, $cn->Conectarse());
        return $rs;
    }
    
    function dameImagenesRecarga() {
        $cn = new coneccion();
        $sql = "SELECT * FROM imagenes";
        $rs = mysql_query($sql, $cn->Conectarse());
        return $rs;
    }

    function ejecutarSentencia($sql) {
        include '../DaoConnection/coneccion.php';
        $cn = new coneccion();
        if (!mysql_query($sql, $cn->Conectarse())) {
            throw new Exception(mysql_error());
        }
    }

    function formatoError($error) {
        $errorPerzonalizado = "<h1> <label style='color: red'>" . $error . "</lable></h1>";
        return $errorPerzonalizado;
    }

}
