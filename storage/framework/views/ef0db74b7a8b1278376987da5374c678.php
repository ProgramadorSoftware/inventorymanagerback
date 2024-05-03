<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="ventas-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Fecha</th>
                <th>Nombre Client</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($venta->id); ?></td>
                    <td><?php echo e($venta->fecha); ?></td>
                    <td><?php echo e($venta->client->nombre); ?></td>
                    <td  style="width: 120px">
                        <?php echo Form::open(['route' => ['ventas.destroy', $venta->id], 'method' => 'delete']); ?>

                        <div class='btn-group'>
                            <a href="<?php echo e(route('ventas.show', [$venta->id])); ?>"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="<?php echo e(route('ventas.edit', [$venta->id])); ?>"
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
            <?php echo $__env->make('adminlte-templates::common.paginate', ['records' => $ventas], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/ventas/table.blade.php ENDPATH**/ ?>