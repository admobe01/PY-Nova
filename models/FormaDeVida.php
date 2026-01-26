<?php

class FormaDeVida extends EntidadEstelar{

    protected $dieta;
    
    function __construct($dieta, $codigo, $nombre, $creditos){
    parent::__construct($codigo, $nombre, $creditos);
    $this -> dieta = $dieta;
    }


}

?>