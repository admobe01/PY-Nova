<?php

class FormaDeVida extends EntidadEstelar implements iInteractuable{

    protected $dieta;
    
    function __construct($nombre,$planetaOG, $estabilidad, $dieta){
    parent::__construct($nombre,$planetaOG, $estabilidad);
    $this -> dieta = $dieta;
    }


    function reaccionar(){  
        $num = rand(1,4);
            if ($num == 1) {
        return "La vida exclamo un: 'Yo en la calle te mato'. Algo incomprensible";
    } elseif ($num == 2) {
        return "La entidad te mira fijamente y susurra: 'Sé dónde aparcas la nave, humano'.";
    } elseif ($num == 3) {
        return "Emite un zumbido ensordecedor que suena sospechosamente parecido a una risa enlatada.";
    } else {
        return "Se estremece violentamente y proyecta un holograma: 'Error 404: Empatía no encontrada'. Te sientes juzgado";
    }
    }

    function getAtributo(){
        return $this->dieta;
    }

    function setAtributo($dieta){
        $this -> dieta = $dieta;
    }
}
?>