<?php
require_once 'autoload.php';
session_start();
$controllerFuera = new GestorExpedicion();
$controller = new controller($controllerFuera);

$accion = $_GET['accion'] ?? 'index';

switch ($accion) {
    case 'crear':
        $controller->crear();
        break;
    case 'editar':
        $controller->editar();
        break;
    case 'eliminar':
        $controller->eliminar();
        break;
    default:
        $controller->index();
}