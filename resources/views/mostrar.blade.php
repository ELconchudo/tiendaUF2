<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Productos</title>
</head>
<body>
    <h2>Productos</h2>

    <form action="{{ route('catalogo.mostrar') }}" method="get">
        <label for="categoria">Buscar por categoría:</label>
        <input type="text" name="categoria" value="{{ request('categoria') }}">
        <button type="submit">Buscar</button>

        <label for="ordenar">Ordenar por precio:</label>
        <select name="ordenar">
            <option value="asc" {{ request('ordenar') === 'asc' ? 'selected' : '' }}>Menor a Mayor</option>
            <option value="desc" {{ request('ordenar') === 'desc' ? 'selected' : '' }}>Mayor a Menor</option>
        </select>
        <button type="submit">Ordenar</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Unidades</th>
                <th>Precio Unitario</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->unidades }}</td>
                    <td>{{ $producto->precio_unitario }}</td>
                    <td>{{ $producto->categoria }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>