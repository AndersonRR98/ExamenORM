<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Habilidad</title>
</head>
<body>
    <h1>Actualizar habilidad</h1>

    <!-- Formulario de actualización -->
    <form action="/hijos/{{ $hijos->id }}" method="POST">
        @csrf
        @method('PUT')

        
        <label for="nombre">nombre:</label>
        <input type="text" name="nombre" value="{{ $hijos->nombre }}" required><br>

        <label for="fecha_nacimiento">Fecha Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" value="{{ $hijos->fecha_nacimiento }}"><br>

        <label for="empleado_id">empleado ID:</label>
        <input type="number" name="empleado_id" value="{{ $hijos->empleado_id }}" required><br>

        <button type="submit">Actualizar Hijo</button>

    </form>

    <hr>

    <!-- Formulario para eliminar -->
    <form action="/hijos/{{ $hijos->id }}" method="POST" style="margin-top:10px;">
        @csrf
        @method('DELETE')
        <button type="submit" style="background-color:red; color:white;">Eliminar Hijo</button>
    </form>

</body>
</html>
