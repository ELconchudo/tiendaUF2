<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Productos</title>
</head>
<body>
    <h2>Productos</h2>

    <form action="<?php echo e(route('catalogo.mostrar')); ?>" method="get">
        <label for="categoria">Buscar por categoría:</label>
        <input type="text" name="categoria" value="<?php echo e(request('categoria')); ?>">
        <button type="submit">Buscar</button>

        <label for="ordenar">Ordenar por precio:</label>
        <select name="ordenar">
            <option value="asc" <?php echo e(request('ordenar') === 'asc' ? 'selected' : ''); ?>>Menor a Mayor</option>
            <option value="desc" <?php echo e(request('ordenar') === 'desc' ? 'selected' : ''); ?>>Mayor a Menor</option>
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
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($producto->id); ?></td>
                    <td><?php echo e($producto->nombre); ?></td>
                    <td><?php echo e($producto->descripcion); ?></td>
                    <td><?php echo e($producto->unidades); ?></td>
                    <td><?php echo e($producto->precio_unitario); ?></td>
                    <td><?php echo e($producto->categoria); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\tienda\resources\views/mostrar.blade.php ENDPATH**/ ?>