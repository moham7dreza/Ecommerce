<?php $__env->startSection('head-tag'); ?>
    <title>
        <?php echo e($systemCategory->name. ' ' .$systemType->name. ' ' .$systemCpu->name. ' ' . $systemConfig); ?>

    </title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.master-one-col', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\CODEX\1 - laravel-shop-project\resources\views/smart-assemble/build.blade.php ENDPATH**/ ?>