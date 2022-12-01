<div class="col-lg-4 col-md-12 sidebar-right">
    <div class="sidebar-widget mb-30">
        <div class="widget-header position-relative mb-30">
            <div class="row">
                <div class="col-7">
                    <h4 class="widget-title mb-0">از دست <span>ندهید</span></h4>
                </div>
                <div class="col-5 text-left">
                    <h6 class="font-medium pl-15">
                        <a class="text-muted font-small" href="#">مشاهده همه</a>
                    </h6>
                </div>
            </div>
        </div>
        <div class="post-aside-style-1 border-radius-10 p-20 bg-white">
            <ul class="list-post">
                <?php $__currentLoopData = $vipPostsOrderByView; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="mb-20">
                        <div class="d-flex">
                            <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                <a class="color-white" href="<?php echo e(route('digital-world.livewire.post.detail', $post)); ?>">
                                    <img src="<?php echo e($post->imagePath()); ?>" alt="<?php echo e($post->title); ?>">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6 class="post-title mb-10 text-limit-2-row">
                                    <a href="<?php echo e(route('digital-world.livewire.post.detail', $post)); ?>"><?php echo e($post->limitedTitle()); ?></a>
                                </h6>
                            </div>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
    <div class="sidebar-widget mb-30">
        <div class="widget-top-auhor border-radius-10 p-20 bg-white">
            <div class="widget-header widget-header-style-1 position-relative mb-15">
                <h5 class="widget-title pl-5">نویسندگان <span>برتر</span></h5>
            </div>
            <?php $__currentLoopData = $authorUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="red-tooltip active" href="<?php echo e($user->path()); ?>" data-toggle="tooltip" data-placement="top"
                   data-original-title="<?php echo e($user->fullName); ?> - <?php echo e($user->getPostsCount()); ?> پست">
                    <img src="<?php echo e($user->image()); ?>" alt="<?php echo e($user->fullName); ?>">
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <!--Newsletter-->
    <div class="sidebar-widget widget_newsletter border-radius-10 p-20 bg-white mb-30">
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
    <!--Post aside style 2-->
    <div class="sidebar-widget mb-30">
        <div class="widget-header mb-30">
            <h5 class="widget-title">پرطرفدارترین ها</h5>
        </div>
        <div class="post-aside-style-2">
            <ul class="list-post">
                <?php $__currentLoopData = $postsOrderByView; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="mb-30 wow fadeIn animated">
                        <div class="d-flex">
                            <div class="post-thumb d-flex ml-15 border-radius-5 img-hover-scale">
                                <a class="color-white" href="<?php echo e(route('digital-world.livewire.post.detail', $post)); ?>">
                                    <img src="<?php echo e($post->imagePath()); ?>" alt="<?php echo e($post->title); ?>">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6 class="post-title mb-10 text-limit-2-row">
                                    <a href="<?php echo e(route('digital-world.livewire.post.detail', $post)); ?>"><?php echo e($post->limitedTitle()); ?></a>
                                </h6>
                                <div class="entry-meta meta-1 font-x-small color-grey float-right text-uppercase">
                                    <span class="post-by">توسط <a href="<?php echo e($post->getAuthorPath()); ?>"><?php echo e($post->textAuthorName()); ?></a></span>
                                    <span class="post-on"><?php echo e($post->getDiffCreatedDate()); ?></span>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('digital-world.partials.comments')->html();
} elseif ($_instance->childHasBeenRendered('l113634435-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l113634435-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l113634435-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l113634435-0');
} else {
    $response = \Livewire\Livewire::mount('digital-world.partials.comments');
    $html = $response->html();
    $_instance->logRenderedChild('l113634435-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH C:\CODEX\techzilla\resources\views/livewire/digital-world/partials/left-sidebar.blade.php ENDPATH**/ ?>