<!doctype html>
<html lang="en">
<head>
    <?php echo $__env->make('it-city.layouts.head-tag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('head-tag'); ?>
</head>
<body id="default_theme" class="it_service">
<!-- loader -->
<div class="bg_load"><img class="loader_animation" src="<?php echo e(asset('it-next-assets/images/loaders/loader_1.png')); ?>"
                          alt="#"/></div>
<!-- end loader -->
<?php echo $__env->make('it-city.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('it-city.layouts.search-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('it-city.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('it-city.layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('script'); ?>

</body>
</html>
<?php /**PATH C:\CODEX\techzilla\resources\views/it-city/layouts/master.blade.php ENDPATH**/ ?>