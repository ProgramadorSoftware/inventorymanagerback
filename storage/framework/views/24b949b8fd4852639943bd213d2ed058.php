<!-- Fecha Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha', 'Fecha:'); ?>

    <?php echo Form::text('fecha', null, ['class' => 'form-control','id'=>'fecha']); ?>

</div>

<?php $__env->startPush('page_scripts'); ?>
    <script type="text/javascript">
        $('#fecha').datepicker()
    </script>
<?php $__env->stopPush(); ?>

<!-- Client Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('client_id', 'Client Id:'); ?>

    <?php echo Form::number('client_id', null, ['class' => 'form-control', 'required']); ?>

</div><?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/ventas/fields.blade.php ENDPATH**/ ?>