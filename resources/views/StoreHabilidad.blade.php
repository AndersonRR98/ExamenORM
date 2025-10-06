<!DOCTYPE html>
<html>
<head>
    <title>Crear Habilidad</title>
</head>
<body>
    <h1>Formulario de habilidades</h1>

    <form action="/habilidades" method="POST">
        @csrf

        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion" required><br>

        

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
