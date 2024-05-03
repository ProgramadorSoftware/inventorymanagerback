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

<!-- Supplier Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('supplier_id', 'Supplier Id:'); ?>

    <?php echo Form::number('supplier_id', null, ['class' => 'form-control', 'required']); ?>

</div><?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/ordens/fields.blade.php ENDPATH**/ ?>