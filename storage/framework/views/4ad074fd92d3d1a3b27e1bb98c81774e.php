<?php $__env->startSection('template_title'); ?>
    <?php echo e($cliente->name ?? "{{ __('Mostrar') Cliente"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><?php echo e(__('Mostrar')); ?> Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('clientes.index')); ?>"> <?php echo e(__('Regresar')); ?></a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            <?php echo e($cliente->name); ?>

                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            <?php echo e($cliente->email); ?>

                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            <?php echo e($cliente->phone); ?>

                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            <?php echo e($cliente->address); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crudLaravel\resources\views/cliente/show.blade.php ENDPATH**/ ?>