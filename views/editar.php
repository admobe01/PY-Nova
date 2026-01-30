<DOCTYPE !HTML>
<header></header>
<body>
<head></head>
<main>
    <h1>Editar Entidad Estelar</h1>
    <form method="POST">
    <label for="name">Cambia el nombre</label>
        <input type="text" max="20" name="nombre" value="<?= $hallazgo->getNombre()?>" required><br><br>
    <label for="planeta">Cambia el planeta de origen</label>
        <input type="text" max="20" name="planetaOG" value="<?= $hallazgo->getPlanetaOG()?>" required><br><br>
    <label for="estabilidad">Edite el nivel de peligrosidad</label>
        <input type="number" step="1" min="0" max="10" name="estabilidad" value="<?= $hallazgo->getEstabilidad() ?>"><br><br>
    <label for="Atr">Cambia el atributo</label>
        <input type="text" name="Atr" value="<?= $hallazgo -> getAtributo() ?>"><br><br>
        <input type="hidden" name="id" value="<?= $hallazgo -> getId() ?>">

        <button type="submit">Editar</button>
    </form>
</main>
<footer></footer>
</body>
</HTML>