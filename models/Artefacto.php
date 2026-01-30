<?php

class Artefacto extends EntidadEstelar implements iInteractuable {

    protected $antiguedad;

    function __construct($nombre, $planetaOG, $estabilidad, $antiguedad){
        parent::__construct( $nombre ,$planetaOG, $estabilidad);
        $this -> antiguedad = $antiguedad;
    }

    
    function reaccionar(){
        return "Al golpearlo contra el suelo grita, pero no contra la pared";
    }

    function getAtributo(){
        return $this->antiguedad;
    }

    function setAtributo($antiguedad){
        $this -> antiguedad = $antiguedad;
    }


}

?>