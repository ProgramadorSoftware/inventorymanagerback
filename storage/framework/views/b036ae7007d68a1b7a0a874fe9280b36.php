<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="detalle_ventas-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Sales Id</th>
                <th>Product Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $detalleVentas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detalleVenta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($detalleVenta->id); ?></td>
                    <td><?php echo e($detalleVenta->cantidad); ?></td>
                    <td><?php echo e($detalleVenta->precio_unitario); ?></td>
                    <td><?php echo e($detalleVenta->sales->fecha); ?></td>
                    <td><?php echo e($detalleVenta->product->nombre); ?></td>
                    <td  style="width: 120px">
                        <?php echo Form::open(['route' => ['detalle_ventas.destroy', $detalleVenta->id], 'method' => 'delete']); ?>

                        <div class='btn-group'>
                            <a href="<?php echo e(route('detalle_ventas.show', [$detalleVenta->id])); ?>"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="<?php echo e(route('detalle_ventas.edit', [$detalleVenta->id])); ?>"
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
            <?php echo $__env->make('adminlte-templates::common.paginate', ['records' => $detalleVentas], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/detalle_ventas/table.blade.php ENDPATH**/ ?>