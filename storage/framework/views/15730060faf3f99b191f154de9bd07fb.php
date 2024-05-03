<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="category_products-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Fecha Asignacion</th>
                <th>Descripcion</th>
                <th>Activo</th>
                <th>Prioridad</th>
                <th>Producto</th>
                <th>Usuario</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $categoryProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($categoryProduct->id); ?></td>
                    <td><?php echo e($categoryProduct->nombre); ?></td>
                    <td><?php echo e($categoryProduct->fecha_asignacion); ?></td>
                    <td><?php echo e($categoryProduct->descripcion); ?></td>
                    <td><?php echo e($categoryProduct->activo); ?></td>
                    <td><?php echo e($categoryProduct->prioridad); ?></td>
                    <td><?php echo e($categoryProduct->product->nombre); ?></td>
                    <td><?php echo e($categoryProduct->users->name); ?></td>
                    <td  style="width: 120px">
                        <?php echo Form::open(['route' => ['category_products.destroy', $categoryProduct->id], 'method' => 'delete']); ?>

                        <div class='btn-group'>
                            <a href="<?php echo e(route('category_products.show', [$categoryProduct->id])); ?>"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="<?php echo e(route('category_products.edit', [$categoryProduct->id])); ?>"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                        </div>
                        <?php echo Form::close(); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            <?php echo $__env->make('adminlte-templates::common.paginate', ['records' => $categoryProducts], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/category_products/table.blade.php ENDPATH**/ ?>