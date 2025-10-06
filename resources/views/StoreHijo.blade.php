<!DOCTYPE html>
<html>
<head>
    <title>Crear Hijos</title>
</head>
<body>
    <h1>Formulario de hijos</h1>

    <form action="/hijos" method="POST">
        @csrf

        <label for="nombre">Titulo:</label>
        <input type="text" name="nombre" required><br>

        <label for="fecha_nacimiento">Descripcion:</label>
        <input type="date" name="fecha_nacimiento"><br>

          <label for="empleado_id">empleado ID:</label>
        <input type="number" name="empleado_id" required><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
