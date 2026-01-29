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

            $nom = $_POST['nombre'];
            $plan = $_POST['planeta'];
            $est = $_POST['estabilidad'];
            $atr = $_POST['Atr']

            if ($_POST['tipo'] == "Art"){

              $nuevo =  new Artefacto ($_POST[]) }

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