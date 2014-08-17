<?php

class Venta {

    private $colonia;
    private $precio;
    private $medidas;
    private $habitaciones;
    private $banos;
    private $pisos;
    private $jardin;
    private $patio;
    private $telefono;
    private $internet;
    private $tvpaga;

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

    public function getTelefono() {
        return $this->telefono;
    }

    public function getInternet() {
        return $this->internet;
    }

    public function getTvpaga() {
        return $this->tvpaga;
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

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setInternet($internet) {
        $this->internet = $internet;
    }

    public function setTvpaga($tvpaga) {
        $this->tvpaga = $tvpaga;
    }

}
