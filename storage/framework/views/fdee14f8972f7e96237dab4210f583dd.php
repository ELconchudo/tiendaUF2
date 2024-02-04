<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('nick')); ?>

            <?php echo e(Form::text('nick', $usuario->nick, ['class' => 'form-control' . ($errors->has('nick') ? ' is-invalid' : ''), 'placeholder' => 'Nick'])); ?>

            <?php echo $errors->first('nick', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('email')); ?>

            <?php echo e(Form::text('email', $usuario->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email'])); ?>

            <?php echo $errors->first('email', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('nombre')); ?>

            <?php echo e(Form::text('nombre', $usuario->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

            <?php echo $errors->first('nombre', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('apellidos')); ?>

            <?php echo e(Form::text('apellidos', $usuario->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos'])); ?>

            <?php echo $errors->first('apellidos', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('dni')); ?>

            <?php echo e(Form::text('dni', $usuario->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'Dni'])); ?>

            <?php echo $errors->first('dni', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('fecha_nacimiento')); ?>

            <?php echo e(Form::text('fecha_nacimiento', $usuario->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento'])); ?>

            <?php echo $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('contrasena')); ?>

            <?php echo e(Form::text('contrasena', $usuario->contrasena, ['class' => 'form-control' . ($errors->has('contrasena') ? ' is-invalid' : ''), 'placeholder' => 'Contrasena'])); ?>

            <?php echo $errors->first('contrasena', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('rol')); ?>

            <?php echo e(Form::text('rol', $usuario->rol, ['class' => 'form-control' . ($errors->has('rol') ? ' is-invalid' : ''), 'placeholder' => 'Rol'])); ?>

            <?php echo $errors->first('rol', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\tienda\resources\views/usuario/form.blade.php ENDPATH**/ ?>