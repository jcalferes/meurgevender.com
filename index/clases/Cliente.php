<?php

class Cliente {

    private $nombre;
    private $telefono;
    private $email;
    private $direccion;
    private $ccolonia;
    private $cp;

    public function getNombre() {
        return $this->nombre;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getCcolonia() {
        return $this->ccolonia;
    }

    public function getCp() {
        return $this->cp;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setCcolonia($ccolonia) {
        $this->ccolonia = $ccolonia;
    }

    public function setCp($cp) {
        $this->cp = $cp;
    }

}
