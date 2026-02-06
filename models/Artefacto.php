<?php

class Artefacto extends EntidadEstelar implements iInteractuable {

    protected $antiguedad;

    function __construct($nombre, $planetaOG, $estabilidad, $antiguedad){
        parent::__construct( $nombre ,$planetaOG, $estabilidad);
        $this -> antiguedad = $antiguedad;
    }

    
function reaccionar() {
    $num = rand(1, 4);

    if ($num == 1) {
        return "Al golpearlo contra el suelo grita, pero no contra la pared.";
    } elseif ($num == 2) {
        return "Empieza a proyectar un holograma de tu propia nuca. Te das la vuelta, pero el holograma también lo hace.";
    } elseif ($num == 3) {
        return "Emite un pitido rítmico. Te das cuenta de que está parpadeando en código Morse: 'El final de Lost no es tan malo'.";
    } else {
        return "Se calienta repentinamente y empieza a sonar una música de ascensor que parece provenir de otra dimensión.";
    }
}

    function getAtributo(){
        return $this->antiguedad;
    }

       function getClase(){
        return "Artefacto";
    }

    function setAtributo($antiguedad){
        $this -> antiguedad = $antiguedad;
    }


}

?>