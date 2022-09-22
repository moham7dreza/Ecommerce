<?php $__env->startSection('head-tag'); ?>
    <title>منو</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">اسمبل هوشمند</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">منو</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ویرایش منو</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ویرایش منو
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="<?php echo e(route('admin.smart-assemble.menu.index')); ?>" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="<?php echo e(route('admin.smart-assemble.menu.update', $systemMenu->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('put')); ?>


                        <section class="row">

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">عنوان منو</label>
                                    <input type="text" name="name" class="form-control form-control-sm"
                                           value="<?php echo e(old('name', $systemMenu->name)); ?>">
                                </div>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    <?php echo e($message); ?>

                                </strong>
                            </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="brief">خلاصه</label>
                                    <input type="text" name="brief" class="form-control form-control-sm"
                                           value="<?php echo e(old('brief', $systemMenu->brief)); ?>">
                                </div>
                                <?php $__errorArgs = ['brief'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    <?php echo e($message); ?>

                                </strong>
                            </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="price">قیمت</label>
                                    <input type="text" name="price" class="form-control form-control-sm"
                                           value="<?php echo e(old('price', $systemMenu->price)); ?>"
                                           placeholder="ایا این منوی خاص قیمت دارد؟">
                                </div>
                                <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    <?php echo e($message); ?>

                                </strong>
                            </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">منو والد</label>
                                    <select name="parent_id" class="form-control form-control-sm">
                                        <option value="">منوی اصلی</option>
                                        <?php $__currentLoopData = $parent_menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <option value="<?php echo e($parent_menu->id); ?>"
                                                    <?php if(old('parent_id', $systemMenu->parent_id) == $parent_menu->id): ?> selected <?php endif; ?>><?php echo e($parent_menu->name); ?></option>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                </div>
                                <?php $__errorArgs = ['parent_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    <?php echo e($message); ?>

                                </strong>
                            </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="url">آدرس URL</label>
                                    <input type="text" name="url" value="<?php echo e(old('url', $systemMenu->url)); ?>"
                                           class="form-control form-control-sm">
                                </div>
                                <?php $__errorArgs = ['url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    <?php echo e($message); ?>

                                </strong>
                            </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </section>

                            <section class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    <label for="image">تصویر</label>
                                    <input type="file" class="form-control form-control-sm" name="image" id="image">
                                </div>
                                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    <?php echo e($message); ?>

                                </strong>
                            </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </section>
                            <?php if(!empty($systemMenu->image)): ?>
                            <section class="row">
                                <?php
                                    $number = 1;
                                ?>
                                <?php $__currentLoopData = $systemMenu->image['indexArray']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <section class="col-md-<?php echo e(6 / $number); ?>">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="currentImage"
                                                   value="<?php echo e($key); ?>" id="<?php echo e($number); ?>"
                                                   <?php if($systemMenu->image['currentImage'] == $key): ?> checked <?php endif; ?>>
                                            <label for="<?php echo e($number); ?>" class="form-check-label mx-2">
                                                <img src="<?php echo e(asset($value)); ?>" class="w-100" alt="">
                                            </label>
                                        </div>
                                    </section>
                                    <?php
                                        $number++;
                                    ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </section>
                            <?php endif; ?>
                            <section class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    <label for="status">وضعیت</label>
                                    <select name="status" class="form-control form-control-sm" id="status">
                                        <option value="0" <?php if(old('status', $systemMenu->status) == 0): ?> selected <?php endif; ?>>
                                            غیرفعال
                                        </option>
                                        <option value="1" <?php if(old('status', $systemMenu->status) == 1): ?> selected <?php endif; ?>>فعال
                                        </option>
                                    </select>
                                </div>
                                <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                    <strong>
                                        <?php echo e($message); ?>

                                    </strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </section>


                            <section class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    <label for="show_in_menu">نمایش در منو</label>
                                    <select name="show_in_menu" class="form-control form-control-sm" id="show_in_menu">
                                        <option value="0"
                                                <?php if(old('show_in_menu', $systemMenu->show_in_menu) == 0): ?> selected <?php endif; ?>>
                                            غیرفعال
                                        </option>
                                        <option value="1"
                                                <?php if(old('show_in_menu', $systemMenu->show_in_menu) == 1): ?> selected <?php endif; ?>>فعال
                                        </option>
                                    </select>
                                </div>
                                <?php $__errorArgs = ['show_in_menu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                    <strong>
                                        <?php echo e($message); ?>

                                    </strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </section>

                            <section class="col-12">
                                <button class="btn btn-primary btn-sm">ثبت</button>
                            </section>
                        </section>
                    </form>
                </section>

            </section>
        </section>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\CODEX\mars-shop\resources\views/admin/smart-assemble/menu/edit.blade.php ENDPATH**/ ?>