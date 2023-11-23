<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('anabolicos.store') }}" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="tipo" placeholder="Tipo">
        <textarea name="descripcion" placeholder="Descripción"></textarea>
        <button type="submit">Agregar</button>
    </form>
</body>

</html>