<?php if($config->options->localized): ?>
    Flash::success(__('messages.deleted', ['model' => __('models/<?php echo e($config->modelNames->camelPlural); ?>.singular')]));
<?php else: ?>
    Flash::success('<?php echo e($config->modelNames->human); ?> deleted successfully.');
<?php endif; ?><?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/vendor/laravel-generator/scaffold/controller/messages/delete_success.blade.php ENDPATH**/ ?>