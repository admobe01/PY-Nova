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
        require_once 'helpers/funciones.php';

        //Traemos TODOS los hallazgos del gestor
        $todos = $this->gestorControlador->ObtenerTodos();

        //Configuración de la paginación
        $porPagina = 5;
        $paginaActual = obtenerPaginaActual();
        $totalPaginas = obtenerTotalPaginas($todos, $porPagina);

        // Si estamos en pág 2: (2-1)*5 = 5. Empezamos en el 5.
        $inicio = ($paginaActual - 1) * $porPagina;

        // Cortamos el array para enviar a la vista SOLO los 5 que tocan
        // array_slice(array, donde_empieza, cuantos_coge)
        $estelar = array_slice($todos, $inicio, $porPagina);

        include "views/listar.php";
    }

    function crear()
    {   

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nuevo = null;
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
        }else{
        header("Location: index.php");
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