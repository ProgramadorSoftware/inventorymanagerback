<!-- <?php echo e($fieldTitle); ?> Field -->
<div class="col-sm-12">
<?php if($config->options->localized): ?>
    {!! Form::label('<?php echo e($fieldName); ?>', __('models/<?php echo e($config->modelNames->camelPlural); ?>.fields.<?php echo e($fieldName); ?>').':') !!}
<?php else: ?>
    {!! Form::label('<?php echo e($fieldName); ?>', '<?php echo e($fieldTitle); ?>:') !!}
<?php endif; ?>
    <p>{{ $<?php echo $config->modelNames->camel; ?>-><?php echo $fieldName; ?> }}</p>
</div><?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/vendor/adminlte-templates/templates/scaffold/show_field.blade.php ENDPATH**/ ?>