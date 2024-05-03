<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]); ?>

</div>

<!-- Fecha Asignacion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_asignacion', 'Fecha Asignacion:'); ?>

    <?php echo Form::text('fecha_asignacion', null, ['class' => 'form-control','id'=>'fecha_asignacion']); ?>

</div>

<?php $__env->startPush('page_scripts'); ?>
    <script type="text/javascript">
        $('#fecha_asignacion').datepicker()
    </script>
<?php $__env->stopPush(); ?>

<!-- Prioridad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('prioridad', 'Prioridad:'); ?>

    <?php echo Form::number('prioridad', null, ['class' => 'form-control']); ?>

</div>

<!-- Product Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('product_id', 'Product Id:'); ?>

    <?php echo Form::number('product_id', null, ['class' => 'form-control', 'required']); ?>

</div>

<!-- Users Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('users_id', 'Users Id:'); ?>

    <?php echo Form::number('users_id', null, ['class' => 'form-control', 'required']); ?>

</div>
<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('descripcion', 'Descripcion:'); ?>

    <?php echo Form::textarea('descripcion', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]); ?>

</div>

<!-- Activo Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        <?php echo Form::hidden('activo', 0, ['class' => 'form-check-input']); ?>

        <?php echo Form::checkbox('activo', '1', null, ['class' => 'form-check-input']); ?>

        <?php echo Form::label('activo', 'Activo', ['class' => 'form-check-label']); ?>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/category_products/fields.blade.php ENDPATH**/ ?>