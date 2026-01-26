<?php
spl_autoload_register(function ($clase) {
    // Busca en la carpeta models
    $rutaModel = 'models/' . $clase . '.php';
    if (file_exists($rutaModel)) {
        require_once $rutaModel;
    }
    
    // Busca en la carpeta controllers
    $rutaController = 'controllers/' . $clase . '.php';
    if (file_exists($rutaController)) {
        require_once $rutaController;
    }
});
?>