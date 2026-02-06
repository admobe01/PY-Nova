<?php

class MineralRaro extends EntidadEstelar implements iInteractuable
{

    protected $dureza;

    function __construct($nombre, $planetaOG, $estabilidad, $dureza)
    {
        parent::__construct($nombre, $planetaOG, $estabilidad);

        $this->dureza = $dureza;
    }


    function reaccionar() {
    $num = rand(1, 4);
    
    if ($num == 1) {
        return "Si la tiras a alguien en la cabeza lo desnucas, comprobado.";
    } elseif ($num == 2) {
        return "Al tocarlo, sientes cómo tus pensamientos se vuelven violetas y escuchas: 'No me sueltes'.";
    } elseif ($num == 3) {
        return "Vibra y tu reloj cambia a la hora de Marte. Has olvidado cómo se dice 'queso'.";
    } else {
        return "El mineral empieza a sudar un líquido negro que huele a tus vacaciones favoritas.";
    }
}

       function getClase(){
        return "Mineral raro";
    }

    function getAtributo(){
        return $this->dureza;
    }

    function setAtributo($dureza)
    {
        $this->dureza = $dureza;
    }
}
