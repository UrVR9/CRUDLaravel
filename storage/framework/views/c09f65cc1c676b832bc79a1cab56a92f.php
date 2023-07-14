<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('Nombre')); ?>

            <?php echo e(Form::text('name', $cliente->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => ''])); ?>

            <?php echo $errors->first('name', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Correo')); ?>

            <?php echo e(Form::text('email', $cliente->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => ''])); ?>

            <?php echo $errors->first('email', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Teléfono')); ?>

            <?php echo e(Form::text('phone', $cliente->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => ''])); ?>

            <?php echo $errors->first('phone', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Dirección')); ?>

            <?php echo e(Form::text('address', $cliente->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => ''])); ?>

            <?php echo $errors->first('address', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Agregar cliente')); ?></button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\crudLaravel\resources\views/cliente/form.blade.php ENDPATH**/ ?>