<?php $__env->startSection('template_title'); ?>
    <?php echo e($usuario->name ?? "{{ __('Show') Usuario"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><?php echo e(__('Show')); ?> Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('usuarios.index')); ?>"> <?php echo e(__('Back')); ?></a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nick:</strong>
                            <?php echo e($usuario->nick); ?>

                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            <?php echo e($usuario->email); ?>

                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            <?php echo e($usuario->nombre); ?>

                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            <?php echo e($usuario->apellidos); ?>

                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            <?php echo e($usuario->dni); ?>

                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            <?php echo e($usuario->fecha_nacimiento); ?>

                        </div>
                        <div class="form-group">
                            <strong>Contrasena:</strong>
                            <?php echo e($usuario->contrasena); ?>

                        </div>
                        <div class="form-group">
                            <strong>Rol:</strong>
                            <?php echo e($usuario->rol); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tienda\resources\views/usuario/show.blade.php ENDPATH**/ ?>