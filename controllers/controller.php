<?php


class Controller
{

    protected $gestorControlador;

    function __Construct($gestor)
    {
        $this->gestorControlador = $gestor;
    }

    function index()
    {
        $estelar = $this->gestorControlador->ObtenerTodos();
        include "views/listar.php";
    }

    function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nom = $_POST['nombre'];
            $plan = $_POST['planetaOG'];
            $est = $_POST['estabilidad'];
            $atr = $_POST['Atr'];

            if ($_POST['tipo'] == "Art") {

                $nuevo = new Artefacto($nom, $plan, $est, $atr);
            } 
                elseif ($_POST['tipo'] == "Vida") {
                    $nuevo = new FormaDeVida($nom, $plan, $est, $atr);
                }
                    elseif ($_POST['tipo'] == "Min"){
                        $nuevo = new MineralRaro($nom, $plan, $est, $atr);
                    }

            if ($nuevo) {
                $this -> gestorControlador -> guardar($nuevo);
            }

            header("Location: index.php");
            exit;   
        }
        include "views/crear.php";
    }

function editar() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
            $id = $_POST['id'];
            $nom = $_POST['nombre'];
            $plan = $_POST['planetaOG'];
            $est = $_POST['estabilidad'];
            $atr = $_POST['Atr'];

            $this -> gestorControlador -> editar($id,$nom, $plan, $est, $atr);

            header("Location: index.php");
            exit;
    } else {
        
        $id = $_GET['id'] ?? null;
        
        $hallazgo = $this->gestorControlador->buscar($id);

        if ($hallazgo) {
            include "views/editar.php";
        }
    }
}

    function eliminar(){
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $id = $_GET['id'] ?? null;

            if ($id) {
                $this -> gestorControlador -> eliminar($id);
                }

            header("Location: index.php");
            exit;
        }
        header("Location: index.php");
        exit;
    }

}