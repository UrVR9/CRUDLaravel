<?php $__env->startSection('template_title'); ?>
    Cliente
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Cliente')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('clientes.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Agregar cliente')); ?>

                                </a>
                              </div>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N.º</th>
                                        
										<th>Nombre</th>
										<th>Email</th>
										<th>Teléfono</th>
										<th>Dirección</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                            
											<td><?php echo e($cliente->name); ?></td>
											<td><?php echo e($cliente->email); ?></td>
											<td><?php echo e($cliente->phone); ?></td>
											<td><?php echo e($cliente->address); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('clientes.destroy',$cliente->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('clientes.show',$cliente->id)); ?>"><i class="fa fa-fw fa-eye"></i> <?php echo e(__('Mostrar datos')); ?></a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('clientes.edit',$cliente->id)); ?>"><i class="fa fa-fw fa-edit"></i> <?php echo e(__('Actualizar')); ?></a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> <?php echo e(__('Borrar')); ?></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $clientes->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crudLaravel\resources\views/cliente/index.blade.php ENDPATH**/ ?>