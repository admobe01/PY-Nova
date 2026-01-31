<?php

// Devuelve el número de página actual mirando la URL (si no hay nada, es la 1)
function obtenerPaginaActual() {
    if (isset($_GET['p'])) {
        return (int)$_GET['p'];
    } else {
        return 1;
    }
}

// Calcula cuántas páginas necesitamos en total
function obtenerTotalPaginas($lista, $porPagina) {
    $totalElementos = count($lista);
    // ceil redondea hacia arriba (ej: 7 elementos entre 5 = 1.4 -> 2 páginas)
    $paginas = ceil($totalElementos / $porPagina);
    
    // Si no hay elementos, al menos mostramos la página 1 vacía
    if ($paginas == 0) return 1;
    
    return $paginas;
}
?>