<?php

abstract class EntidadEstelar {


protected $id;
protected $nombre;
protected $planetaOG;
protected $estabilidad;

function __construct($nombre, $planetaOG, $estabilidad){

$this -> nombre = $nombre;
$this -> planetaOG = $planetaOG;
$this -> estabilidad = $estabilidad;
}

function getNombre(){
    return $this -> nombre;
}

function getPlanetaOG(){
    return $this -> planetaOG;
}

function getEstabilidad(){
    return $this -> estabilidad;
}

function setNombre($nombre){
    $this -> nombre = $nombre
}

function setPlanetaOG($planeta){

    $this -> pla
}
}

?>