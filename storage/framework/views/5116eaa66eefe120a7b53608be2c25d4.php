<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="users-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Role Id</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Email Verified At</th>
                <th>Password</th>
                <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->role->name); ?></td>
                    <td><?php echo e($user->phone_number); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->email_verified_at); ?></td>
                    <td><?php echo e($user->password); ?></td>
                    <td><?php echo e($user->remember_token); ?></td>
                    <td  style="width: 120px">
                        <?php echo Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']); ?>

                        <div class='btn-group'>
                            <a href="<?php echo e(route('users.show', [$user->id])); ?>"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="<?php echo e(route('users.edit', [$user->id])); ?>"
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
            <?php echo $__env->make('adminlte-templates::common.paginate', ['records' => $users], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/users/table.blade.php ENDPATH**/ ?>