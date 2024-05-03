<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="proveedors-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $proveedors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($proveedor->id); ?></td>
                    <td><?php echo e($proveedor->nombre); ?></td>
                    <td><?php echo e($proveedor->direccion); ?></td>
                    <td><?php echo e($proveedor->telefono); ?></td>
                    <td  style="width: 120px">
                        <?php echo Form::open(['route' => ['proveedors.destroy', $proveedor->id], 'method' => 'delete']); ?>

                        <div class='btn-group'>
                            <a href="<?php echo e(route('proveedors.show', [$proveedor->id])); ?>"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="<?php echo e(route('proveedors.edit', [$proveedor->id])); ?>"
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
            <?php echo $__env->make('adminlte-templates::common.paginate', ['records' => $proveedors], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/proveedors/table.blade.php ENDPATH**/ ?>