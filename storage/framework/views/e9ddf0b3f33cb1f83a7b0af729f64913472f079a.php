<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('customer.layouts.head-tag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('head-tag'); ?>
    <meta name="csrf_token" content="<?php echo e(csrf_token()); ?>">
    <?php echo htmlScriptTagJsApi(); ?>

</head>
<body>

<?php echo $__env->make('customer.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main id="main-body-one-col" class="main-body">

    <?php echo $__env->yieldContent('content'); ?>

</main>

<?php echo $__env->make('customer.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('customer.layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('script'); ?>

</body>
</html>
<?php /**PATH C:\CODEX\techzilla\resources\views/customer/layouts/master-one-col.blade.php ENDPATH**/ ?>