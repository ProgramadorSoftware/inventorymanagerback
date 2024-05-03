<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('cantidad', 'Cantidad:'); ?>

    <?php echo Form::number('cantidad', null, ['class' => 'form-control', 'required']); ?>

</div>

<!-- Precio Unitario Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('precio_unitario', 'Precio Unitario:'); ?>

    <?php echo Form::number('precio_unitario', null, ['class' => 'form-control', 'required']); ?>

</div>

<!-- Sales Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('sales_id', 'Sales Id:'); ?>

    <?php echo Form::number('sales_id', null, ['class' => 'form-control', 'required']); ?>

</div>

<!-- Product Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('product_id', 'Product Id:'); ?>

    <?php echo Form::number('product_id', null, ['class' => 'form-control', 'required']); ?>

</div><?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/detalle_ventas/fields.blade.php ENDPATH**/ ?>