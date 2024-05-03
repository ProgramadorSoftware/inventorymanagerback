<!-- Nombre Field -->
<div class="col-sm-12">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <p><?php echo e($proveedor->nombre); ?></p>
</div>

<!-- Direccion Field -->
<div class="col-sm-12">
    <?php echo Form::label('direccion', 'Direccion:'); ?>

    <p><?php echo e($proveedor->direccion); ?></p>
</div>

<!-- Telefono Field -->
<div class="col-sm-12">
    <?php echo Form::label('telefono', 'Telefono:'); ?>

    <p><?php echo e($proveedor->telefono); ?></p>
</div>

<?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/proveedors/show_fields.blade.php ENDPATH**/ ?>