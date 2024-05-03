<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]); ?>

</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('descripcion', 'Descripcion:'); ?>

    <?php echo Form::textarea('descripcion', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]); ?>

</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('precio', 'Precio:'); ?>

    <?php echo Form::number('precio', null, ['class' => 'form-control', 'required']); ?>

</div>

<!-- Cantidad Disponible Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cantidad_disponible', 'Cantidad Disponible:'); ?>

    <?php echo Form::number('cantidad_disponible', null, ['class' => 'form-control', 'required']); ?>

</div><?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/productos/fields.blade.php ENDPATH**/ ?>