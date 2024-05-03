<!-- Name Field -->
<div class="col-sm-12">
    <?php echo Form::label('name', 'Name:'); ?>

    <p><?php echo e($user->name); ?></p>
</div>

<!-- Role Id Field -->
<div class="col-sm-12">
    <?php echo Form::label('role_id', 'Role Id:'); ?>

    <p><?php echo e($user->role_id); ?></p>
</div>

<!-- Phone Number Field -->
<div class="col-sm-12">
    <?php echo Form::label('phone_number', 'Phone Number:'); ?>

    <p><?php echo e($user->phone_number); ?></p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    <?php echo Form::label('email', 'Email:'); ?>

    <p><?php echo e($user->email); ?></p>
</div>

<!-- Email Verified At Field -->
<div class="col-sm-12">
    <?php echo Form::label('email_verified_at', 'Email Verified At:'); ?>

    <p><?php echo e($user->email_verified_at); ?></p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    <?php echo Form::label('password', 'Password:'); ?>

    <p><?php echo e($user->password); ?></p>
</div>

<!-- Remember Token Field -->
<div class="col-sm-12">
    <?php echo Form::label('remember_token', 'Remember Token:'); ?>

    <p><?php echo e($user->remember_token); ?></p>
</div>

<?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/users/show_fields.blade.php ENDPATH**/ ?>