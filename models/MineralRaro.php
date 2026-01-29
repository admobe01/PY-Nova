<?php

class MineralRaro extends EntidadEstelar implements iInteractuable
{

    protected $dureza;

    function __construct($nombre, $planetaOG, $estabilidad, $dureza)
    {
        parent::__construct($nombre, $planetaOG, $estabilidad);

        $this->dureza = $dureza;
    }


    function reaccionar()
    {
        return "Si la tiras a alguien en la cabeza lo desnucas, comprobado";
    }

    function getDureza()
    {
        return $this->dureza;
    }

    function setDureza($dureza)
    {
        $this->dureza = $dureza;
    }
}
