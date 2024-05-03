<!-- Nombre Field -->
<div class="col-sm-12">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <p><?php echo e($producto->nombre); ?></p>
</div>

<!-- Descripcion Field -->
<div class="col-sm-12">
    <?php echo Form::label('descripcion', 'Descripcion:'); ?>

    <p><?php echo e($producto->descripcion); ?></p>
</div>

<!-- Precio Field -->
<div class="col-sm-12">
    <?php echo Form::label('precio', 'Precio:'); ?>

    <p><?php echo e($producto->precio); ?></p>
</div>

<!-- Cantidad Disponible Field -->
<div class="col-sm-12">
    <?php echo Form::label('cantidad_disponible', 'Cantidad Disponible:'); ?>

    <p><?php echo e($producto->cantidad_disponible); ?></p>
</div>

<?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/productos/show_fields.blade.php ENDPATH**/ ?>