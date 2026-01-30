<!DOCTYPE html>
<html>

<head>
    <title>Creacion de entidad</title>
</head>

<body>
    <h1>Crear Entidad Estelar</h1>

    <form method="POST">
        <br>
        <label for="select">Tipo de hallazgo</label>
        <select name="tipo" required>
            <option value="Art">Artefacto🏺</option>
            <option value="Vida">Forma de Vida👽</option>
            <option value="Min">Mineral raro💎
        </select>
        <br><br> 
        <label for="name">Elige el nombre</label>
            <input type="text" max="20" name="nombre"required><br><br>
        <label for="PlanetaOG">Planeta de origen</label>
            <input type="name" max="20" name="planetaOG" required><br><br>
        <label for="estabilidad">Indique el nivel de peligrosidad del hallazgo</label>
            <input type="number" step="1" min="0" max="10" name="estabilidad" required><br><br>
        <label for="esp">Atributo especial</label>
            <input type="name" max="20" name="Atr" required><br><br><br>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>