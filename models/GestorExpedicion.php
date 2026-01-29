<?php

class GestorExpedicion implements iGestor
{

    function __construct()
    {
        if (!isset($_SESSION['hallazgos'])) {
            $_SESSION['hallazgos'] = [];
        }
    }

    function obtenerTodos()
    {
        return $_SESSION['hallazgos'];
    }

    function guardar(EntidadEstelar $entidad)
    {

        $_SESSION['hallazgos'][] = $entidad;
    }

    function eliminar($codigo)
    {
        foreach ($_SESSION['hallazgos'] as $i => $p) {
            if ($p->getId() == $codigo) {
                unset($_SESSION['hallazgos'][$i]);
                $_SESSION['hallazgos'] = array_values($_SESSION['hallazgos']);
                return true;
            }
        }
        return false;
    }

    function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $nombre = $_POST['nombre'];
            $planetaOG = $_POST['planeta'];
            $estabilidad = $_POST['estabilidad'];
        }
    }

    function buscar($codigo)
    {
        foreach ($_SESSION['hallazgos'] as $p) {
            if ($p->getId() == $codigo) {
                return $p;
            }
            return null;
        }

        function editar($codigo, $nombre, $planetaOG, $estabilidad, $antiguedad = "", $dureza = "", $dieta = "")
        {
            foreach ($_SESSION['hallazgos'] as $p) {
                if ($p->getId() == $codigo) {
                    $p->setNombre($nombre);
                    $p->setPlanetaOG($planetaOG);
                    $p->setEstabilidad($estabilidad);
                    //aqui faltan las variables especiales
                }
            }
        }
    }
}
