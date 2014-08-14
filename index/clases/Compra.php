<?php

class Compra {

    private $colonia;
    private $precio;
    private $medidas;
    private $habitaciones;
    private $banos;
    private $pisos;
    private $jardin;
    private $patio;
    private $nombre;
    private $telefono;
    private $email;
    private $direccion;
    private $ccolonia;
    private $cp;

    public function getColonia() {
        return $this->colonia;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getMedidas() {
        return $this->medidas;
    }

    public function getHabitaciones() {
        return $this->habitaciones;
    }

    public function getBanos() {
        return $this->banos;
    }

    public function getPisos() {
        return $this->pisos;
    }

    public function getJardin() {
        return $this->jardin;
    }

    public function getPatio() {
        return $this->patio;
    }

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

    public function setColonia($colonia) {
        $this->colonia = $colonia;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function setMedidas($medidas) {
        $this->medidas = $medidas;
    }

    public function setHabitaciones($habitaciones) {
        $this->habitaciones = $habitaciones;
    }

    public function setBanos($banos) {
        $this->banos = $banos;
    }

    public function setPisos($pisos) {
        $this->pisos = $pisos;
    }

    public function setJardin($jardin) {
        $this->jardin = $jardin;
    }

    public function setPatio($patio) {
        $this->patio = $patio;
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
