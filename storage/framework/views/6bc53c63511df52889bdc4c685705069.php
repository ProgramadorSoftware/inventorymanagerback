 *      @OA\Property(
 *          property="<?php echo e($fieldName); ?>",
 *          description="<?php echo e($description); ?>",
 *          readOnly=<?php echo e($readOnly); ?>,
 *          nullable=<?php echo e($nullable); ?>,
 *          type="<?php echo e($type); ?>",
<?php if($format): ?>
 *          format="<?php echo e($format); ?>"
<?php endif; ?>
 *      )<?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/vendor/swagger-generator/model/property.blade.php ENDPATH**/ ?>