<?php $__env->startSection('head-tag'); ?>
    <title>
        لیست پست ها
    </title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="position-relative">
        <div class="archive-header text-center mb-50">
            <div class="container">
                <h2><span class="text-danger">پست ها</span></h2>
                <div class="breadcrumb">
                    <span class="no-arrow">شما الان اینجا هستید::</span>
                    <a href="<?php echo e(route('digital-world.home')); ?>" rel="nofollow">صفحه اصلی</a>
                    <span></span>
                    پست ها
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-9 order-1 order-md-2">
                    <div class="row mb-50">
                        <div class="col-lg-8 col-md-12">
                            <div class="latest-post mb-50">
                                <div class="loop-grid">
                                    <div class="row">
                                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <article class="col-lg-6 col-md-12 wow fadeIn animated">
                                                <div class="background-white border-radius-10 p-10 mb-30">
                                                    <div class="post-thumb d-flex mb-15 border-radius-15 img-hover-scale">
                                                        <a href="<?php echo e($post->path()); ?>">
                                                            <img class="border-radius-15 style-article-img" alt="image article"
                                                                 src="<?php echo e($post->imagePath()); ?>">
                                                        </a>
                                                    </div>
                                                    <div class="pl-10 pr-10">
                                                        <div class="entry-meta mb-15 mt-10">
                                                            <a class="entry-meta meta-2" href="<?php echo e($post->getCategoryPath()); ?>">
                                                                <span class="post-in text-primary font-x-small">
                                                                    <?php echo e($post->textCategoryName()); ?>

                                                                </span>
                                                            </a>
                                                        </div>
                                                        <h5 class="post-title mb-15">
                                                            <a href="<?php echo e($post->path()); ?>">
                                                                <?php echo e($post->limitedTitle()); ?>

                                                            </a>
                                                        </h5>
                                                        <p class="post-exerpt font-medium text-muted mb-30">
                                                                <?php echo $post->limitedSummary(); ?>

                                                        </p>
                                                        <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase mb-10">
                                                            <span class="post-by">توسط
                                                                <a href="<?php echo e($post->getAuthorPath()); ?>">
                                                                    <?php echo e($post->textAuthorName()); ?>

                                                                </a>
                                                            </span>
                                                            <span class="post-on"><?php echo e($post->getDiffCreatedDate()); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="pagination-area mb-30">
                                <?php echo e($posts->links()); ?>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 sidebar-right">
                            <div class="sidebar-widget mb-50">
                                <div class="widget-header mb-30 bg-white border-radius-10 p-15">
                                    <h5 class="widget-title mb-0">پرطرفدارترین ها</h5>
                                </div>
                                <div class="post-aside-style-2">
                                    <ul class="list-post">
                                        <?php $__currentLoopData = $viewsPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="mb-30 wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                                                <div class="d-flex">
                                                    <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                                        <a class="color-white" href="<?php echo e($post->path()); ?>">
                                                            <img src="<?php echo e($post->imagePath()); ?>" alt="<?php echo e($post->title); ?>">
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <h6 class="post-title mb-10 text-limit-2-row">
                                                            <a href="<?php echo e($post->path()); ?>">
                                                                <?php echo e($post->limitedTitle()); ?>

                                                            </a>
                                                        </h6>
                                                        <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase">
                                                            <span class="post-by">توسط
                                                                <a href="<?php echo e($post->getAuthorPath()); ?>"><?php echo e($post->textAuthorName()); ?></a>
                                                            </span>
                                                            <span class="post-on"><?php echo e($post->getDiffCreatedDate()); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget widget_newsletter border-radius-10 p-20 bg-white mb-50">
                                <div class="widget-header widget-header-style-1 position-relative mb-15">
                                    <h5 class="widget-title">خبرنامه</h5>
                                </div>
                                <div class="newsletter">
                                    <p class="font-medium">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                    <form target="_blank" action="#" method="get" class="subscribe_form relative mail_part">
                                        <div class="form-newsletter-cover">
                                            <div class="form-newsletter position-relative">
                                                <input type="email" name="EMAIL" placeholder="ایمیل خود را اینجا وارد کنید" required="">
                                                <button type="submit">
                                                    <i class="ti ti-email"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php echo $__env->make('digital-world.layouts.partials.comments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('digital-world.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\CODEX\techzilla\resources\views/digital-world/post/home.blade.php ENDPATH**/ ?>