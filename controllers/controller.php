<?php


class Controller{

protected $gestorControlador;

    function __Construct($gestor){
        $this->gestorControlador = $gestor;
    }

    function index(){
    $estelar = $this -> gestorControlador -> ObtenerTodos();
    include "views/listar.php";
    }

    function crear(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            header("Location: index.php");
            exit;
        }
        include "views/crear.php";
    }

    function editar(){
        
    }

    function eliminar(){
        
    }

    function reaccion(){
        
    }


}
//Marcos views crear y en el controller indice y crear


?>