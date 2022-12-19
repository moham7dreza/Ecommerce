<?php $__env->startSection('head-tag'); ?>
    <title>تگ های پست</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش محتوی</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">پست</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> تگ های پست</li>
        </ol>
    </nav>

    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        تگ های پست
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 pb-2">
                    <a href="<?php echo e(route('admin.content.post.index')); ?>" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="<?php echo e(route('admin.content.post.update-tags', $post->id)); ?>" method="POST" id="form">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('put')); ?>

                        <section class="row">

                            <section class="col-12">
                                <section class="row border-top mt-3 py-3">

                                    <section class="col-12 col-md-5">
                                        <div class="form-group">
                                            <label for="">نام پست</label>
                                            <section><?php echo e($post->limitedTitle()); ?></section>
                                        </div>
                                    </section>

                                    <section class="col-12 col-md-5">
                                        <div class="form-group">
                                            <label for="">توضیح پست</label>
                                            <section><?php echo $post->limitedSummary(); ?></section>
                                        </div>
                                    </section>

                                    <?php
                                        $postTagsArray = $post->tags()->pluck('id')->toArray();
                                    ?>
                                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <section class="col-md-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="tags[]"
                                                       value="<?php echo e($tag->id); ?>" id="<?php echo e($tag->id); ?>"
                                                       <?php if(in_array($tag->id, $postTagsArray)): ?> checked <?php endif; ?>/>
                                                <label for="<?php echo e($tag->id); ?>"
                                                       class="form-check-label mr-3 mt-1"><?php echo e($tag->name); ?></label>
                                            </div>
                                            <div class="mt-2">
                                                <?php $__errorArgs = ['tags.' . $key];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="alert_required bg-danger text-white p-1 rounded"
                                                      role="alert">
                                            <strong>
                                                <?php echo e($message); ?>

                                            </strong>
                                        </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </section>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <section class="col-12">
                                        <button class="btn btn-primary btn-sm mt-md-4">ثبت</button>
                                    </section>

                                </section>
                            </section>

                        </section>
                    </form>
                </section>

            </section>
        </section>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\CODEX\techzilla\resources\views/admin/content/post/set-tags.blade.php ENDPATH**/ ?>