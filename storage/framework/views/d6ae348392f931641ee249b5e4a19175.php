<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Administrador</title>
</head>
<body>
    <h2>Menú Administrador</h2>

    <a href="<?php echo e(route('productos.index')); ?>">
        <button>Productos</button>
    </a>

    <a href="<?php echo e(route('categorias.index')); ?>">
        <button>Categorías</button>
    </a>

    <a href="<?php echo e(route('carritos.index')); ?>">
        <button>Carrito</button>
    </a>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\tienda\resources\views/menuAdmin.blade.php ENDPATH**/ ?>