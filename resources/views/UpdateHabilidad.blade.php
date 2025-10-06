<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Habilidad</title>
</head>
<body>
    <h1>Actualizar habilidad</h1>

    <!-- Formulario de actualización -->
    <form action="/habilidades/{{ $habilidades->id }}" method="POST">
        @csrf
        @method('PUT')

        <label for="descripcion">Descripcion:</label>
        <input type="text" name="titulo" value="{{ $habilidades->descripcion }}" required><br>
       <button type="submit">Actualizar Habilidad</button>


    </form>

    <hr>

    <!-- Formulario para eliminar -->
    <form action="/habilidades/{{ $habilidades->id }}" method="POST" style="margin-top:10px;">
        @csrf
        @method('DELETE')
        <button type="submit" style="background-color:red; color:white;">Eliminar Usuario</button>
    </form>

</body>
</html>
