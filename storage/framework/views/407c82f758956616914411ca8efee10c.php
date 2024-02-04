<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php if(session('mensaje')): ?>
    <p><?php echo e(session('mensaje')); ?></p>
<?php endif; ?>

    <?php if(session('error')): ?>
        <div style="color: red;"><?php echo e(session('error')); ?></div>
    <?php endif; ?>

    <form action="<?php echo e(route('inicioSesion.iniciar')); ?>" method="post">
        <?php echo csrf_field(); ?>
    
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo e(old('email')); ?>" required>
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div style="color: red;"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div style="color: red;"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    
        <button type="submit">Iniciar Sesión</button>
    </form>

    <p>¿Aún no tienes cuenta? <a href="<?php echo e(route('registro.mostrar')); ?>">Regístrate aquí</a>.</p>
    <p>¿Quieres forzar el inicio de sesion? <a href="<?php echo e(route('catalogo.mostrar')); ?>">Ir al Catálogo de Productos</a>.</p>
    <p>¿Eres administrador? <a href="<?php echo e(route('menuAdmin')); ?>">Ir al Menú</a>.</p>


</body>
</html><?php /**PATH C:\xampp\htdocs\tienda\resources\views/inicioSesion.blade.php ENDPATH**/ ?>