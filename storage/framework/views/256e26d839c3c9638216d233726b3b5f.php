<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('id_producto')); ?>

            <?php echo e(Form::text('id_producto', $producto->id_producto, ['class' => 'form-control' . ($errors->has('id_producto') ? ' is-invalid' : ''), 'placeholder' => 'Id Producto'])); ?>

            <?php echo $errors->first('id_producto', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('nombre')); ?>

            <?php echo e(Form::text('nombre', $producto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

            <?php echo $errors->first('nombre', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('descripcion')); ?>

            <?php echo e(Form::text('descripcion', $producto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion'])); ?>

            <?php echo $errors->first('descripcion', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('unidades')); ?>

            <?php echo e(Form::text('unidades', $producto->unidades, ['class' => 'form-control' . ($errors->has('unidades') ? ' is-invalid' : ''), 'placeholder' => 'Unidades'])); ?>

            <?php echo $errors->first('unidades', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('precio_unitario')); ?>

            <?php echo e(Form::text('precio_unitario', $producto->precio_unitario, ['class' => 'form-control' . ($errors->has('precio_unitario') ? ' is-invalid' : ''), 'placeholder' => 'Precio Unitario'])); ?>

            <?php echo $errors->first('precio_unitario', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('categoria')); ?>

            <?php echo e(Form::text('categoria', $producto->categoria, ['class' => 'form-control' . ($errors->has('categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoria'])); ?>

            <?php echo $errors->first('categoria', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\tienda\resources\views/producto/form.blade.php ENDPATH**/ ?>