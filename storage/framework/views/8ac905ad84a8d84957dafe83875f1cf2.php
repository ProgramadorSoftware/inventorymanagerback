<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]); ?>

</div>

<!-- Role Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('role_id', 'Role Id:'); ?>

    <?php echo Form::number('role_id', null, ['class' => 'form-control', 'required']); ?>

</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('phone_number', 'Phone Number:'); ?>

    <?php echo Form::text('phone_number', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::email('email', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]); ?>

</div>

<!-- Email Verified At Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email_verified_at', 'Email Verified At:'); ?>

    <?php echo Form::text('email_verified_at', null, ['class' => 'form-control','id'=>'email_verified_at']); ?>

</div>

<?php $__env->startPush('page_scripts'); ?>
    <script type="text/javascript">
        $('#email_verified_at').datepicker()
    </script>
<?php $__env->stopPush(); ?>

<!-- password Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('password', 'Password:'); ?>

    <?php echo Form::password('password', ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]); ?>

</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('remember_token', 'Remember Token:'); ?>

    <?php echo Form::text('remember_token', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]); ?>

</div><?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/users/fields.blade.php ENDPATH**/ ?>