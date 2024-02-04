<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('producto')); ?>

            <?php echo e(Form::text('producto', $carrito->producto, ['class' => 'form-control' . ($errors->has('producto') ? ' is-invalid' : ''), 'placeholder' => 'Producto'])); ?>

            <?php echo $errors->first('producto', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('cantidad')); ?>

            <?php echo e(Form::text('cantidad', $carrito->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad'])); ?>

            <?php echo $errors->first('cantidad', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('precio_producto')); ?>

            <?php echo e(Form::text('precio_producto', $carrito->precio_producto, ['class' => 'form-control' . ($errors->has('precio_producto') ? ' is-invalid' : ''), 'placeholder' => 'Precio Producto'])); ?>

            <?php echo $errors->first('precio_producto', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('total')); ?>

            <?php echo e(Form::text('total', $carrito->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total'])); ?>

            <?php echo $errors->first('total', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\tienda\resources\views/carrito/form.blade.php ENDPATH**/ ?>