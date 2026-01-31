<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Logbook - Expedición Nova</title>
</head>

<body>
    <h1>Censo de Entidades Galácticas</h1>

    <a href="index.php?accion=crear">Registrar Nuevo Hallazgo</a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Origen</th>
                <th>Estabilidad</th>
                <th>Atributo Especial</th>
                <th>Reacción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estelar as $h): ?>
                <?php
                // Requisito: Fondo rojo si estabilidad < 3 
                $estiloAlerta = ($h->getEstabilidad() < 3) ? 'style="background-color: #e00f0f;"' : '';
                ?>
                <tr <?= $estiloAlerta ?>>
                    <td><?= $h->getId() ?></td>
                    <td><?= $h->getNombre() ?></td>
                    <td><?= $h->getPlanetaOG() ?></td>
                    <td><?= $h->getEstabilidad() ?>/10</td>
                    <td><?= $h->getAtributo() ?></td>
                    <td><em><?= $h->reaccionar() ?></em></td>
                    <td>
                        <a href="index.php?accion=editar&id=<?= $h->getId() ?>">Editar</a>
                        |
                        <a href="index.php?accion=eliminar&id=<?= $h->getId() ?>">eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </table id="paginador"> <div style="margin-top: 20px; text-align: center;">
        <p>Página <?= $paginaActual ?> de <?= $totalPaginas ?></p>
        
        <?php if ($paginaActual > 1): ?>
            <a href="index.php?accion=index&p=<?= $paginaActual - 1 ?>"> « Anterior </a>
        <?php endif; ?>
        
        <?php if ($paginaActual < $totalPaginas): ?>
            <a href="index.php?accion=index&p=<?= $paginaActual + 1 ?>"> Siguiente » </a>
        <?php endif; ?>
    </div>
    
</body>

</html>