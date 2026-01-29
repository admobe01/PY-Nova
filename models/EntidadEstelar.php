<?php

    abstract class EntidadEstelar {


    protected $id;
    protected $nombre;
    protected $planetaOG;
    protected $estabilidad;

    function __construct($nombre, $planetaOG, $estabilidad){

    $this -> id = uniqid();
    $this -> nombre = $nombre;
    $this -> planetaOG = $planetaOG;
    $this -> estabilidad = $estabilidad;

    }

    function getId(){
        return $this -> id;
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
        $this -> nombre = $nombre;
    }

    function setPlanetaOG($planetaOG){
        $this -> planetaOG = $planetaOG;
    }

    function setEstabilidad($estabilidad){
        $this -> estabilidad = $estabilidad;
    }    
}

?>