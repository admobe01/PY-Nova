<?php


interface iGestor{

function obtenerTodos();
function guardar(EntidadEstelar $entidad);
function eliminar($id);

}

?>