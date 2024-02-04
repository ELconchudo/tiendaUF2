<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    @if(session('mensaje'))
    <p>{{ session('mensaje') }}</p>
@endif

    @if(session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif

    <form action="{{ route('inicioSesion.iniciar') }}" method="post">
        @csrf
    
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>
        @error('password')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    
        <button type="submit">Iniciar Sesión</button>
    </form>

    <p>¿Aún no tienes cuenta? <a href="{{ route('registro.mostrar') }}">Regístrate aquí</a>.</p>
    <p>¿Quieres forzar el inicio de sesion? <a href="{{ route('catalogo.mostrar') }}">Ir al Catálogo de Productos</a>.</p>
    <p>¿Eres administrador? <a href="{{ route('menuAdmin') }}">Ir al Menú</a>.</p>


</body>
</html>