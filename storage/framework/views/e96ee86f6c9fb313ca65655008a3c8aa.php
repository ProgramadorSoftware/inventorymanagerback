<!-- Cantidad Field -->
<div class="col-sm-12">
    <?php echo Form::label('cantidad', 'Cantidad:'); ?>

    <p><?php echo e($detalleVenta->cantidad); ?></p>
</div>

<!-- Precio Unitario Field -->
<div class="col-sm-12">
    <?php echo Form::label('precio_unitario', 'Precio Unitario:'); ?>

    <p><?php echo e($detalleVenta->precio_unitario); ?></p>
</div>

<!-- Sales Id Field -->
<div class="col-sm-12">
    <?php echo Form::label('sales_id', 'Fecha venta:'); ?>

    <p><?php echo e($detalleVenta->sales->fecha); ?></p>
</div>

<!-- Product Id Field -->
<div class="col-sm-12">
    <?php echo Form::label('product_id', 'Producto:'); ?>

    <p><?php echo e($detalleVenta->product->nombre); ?></p>
</div>

<?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/detalle_ventas/show_fields.blade.php ENDPATH**/ ?>