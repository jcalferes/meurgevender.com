<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Comodoro
 */
class Usuario {

    private $idUsuario;
    private $usuario;
    private $pass;

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getPass() {
        return $this->pass;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }

}
