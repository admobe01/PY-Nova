<?php

class FormaDeVida extends EntidadEstelar implements iInteractuable{

    protected $dieta;
    
    function __construct($nombre,$planetaOG, $estabilidad, $dieta){
    parent::__construct($nombre,$planetaOG, $estabilidad);
    $this -> dieta = $dieta;
    }


    function reaccionar(){
        return "La vida exclamo un: Yo en la calle te mato. Algo incomprensible ";
    }

    function getDieta(){
        return $this->dieta;
    }

    function setDieta($dieta){
        $this -> dieta;
    }

}

?>