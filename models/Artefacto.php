<?php

class Artefacto extends EntidadEstelar implements iInteractuable {

    protected $antiguedad;

    function __construct($nombre, $planetaOG, $estabilidad, $antiguedad,){
        parent::__construct( $nombre ,$planetaOG, $estabilidad);
        
        $this -> antiguedad = $antiguedad;
    }

    
    function reaccionar(){
        return "Al golpearlo contra el suelo grita pero no contra la pared";
    }

    function getAntiguedad(){
        return $this->antiguedad;
    }

    function setAntiguedad($antiguedad){
        $this -> antiguedad = $antiguedad;
    }


}

?>