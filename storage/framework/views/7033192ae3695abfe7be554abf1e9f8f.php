<!-- Nombre Field -->
<div class="col-sm-12">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <p><?php echo e($categoryProduct->nombre); ?></p>
</div>

<!-- Fecha Asignacion Field -->
<div class="col-sm-12">
    <?php echo Form::label('fecha_asignacion', 'Fecha Asignacion:'); ?>

    <p><?php echo e($categoryProduct->fecha_asignacion); ?></p>
</div>

<!-- Descripcion Field -->
<div class="col-sm-12">
    <?php echo Form::label('descripcion', 'Descripcion:'); ?>

    <p><?php echo e($categoryProduct->descripcion); ?></p>
</div>

<!-- Activo Field -->
<div class="col-sm-12">
    <?php echo Form::label('activo', 'Activo:'); ?>

    <p><?php echo e($categoryProduct->activo); ?></p>
</div>

<!-- Prioridad Field -->
<div class="col-sm-12">
    <?php echo Form::label('prioridad', 'Prioridad:'); ?>

    <p><?php echo e($categoryProduct->prioridad); ?></p>
</div>

<!-- Product Id Field -->
<div class="col-sm-12">
    <?php echo Form::label('product_id', 'Product Id:'); ?>

    <p><?php echo e($categoryProduct->product->nombre); ?></p>
</div>

<!-- Users Id Field -->
<div class="col-sm-12">
    <?php echo Form::label('users_id', 'Users Id:'); ?>

    <p><?php echo e($categoryProduct->users->name); ?></p>
</div>

<?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/category_products/show_fields.blade.php ENDPATH**/ ?>