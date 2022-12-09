<?php $__env->startSection('head-tag'); ?>
    <title>پرداخت</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <!-- start cart -->
    <section class="mb-4">
        <section class="container-xxl">
            <section class="row">
                <?php if(session('copan')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('copan')); ?>

                    </div>
                <?php endif; ?>
                <?php if($errors->any()): ?>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
                <section class="col">
                    <!-- start vontent header -->
                    <section class="content-header">
                        <section class="d-flex justify-content-between align-items-center">
                            <h2 class="content-header-title">
                                <span>انتخاب نوع پرداخت </span>
                            </h2>
                            <section class="content-header-link">
                                <!--<a href="#">مشاهده همه</a>-->
                            </section>
                        </section>
                    </section>

                    <section class="row mt-4">
                        <section class="col-md-9">
                            <section class="content-wrapper bg-white p-3 rounded-2 mb-4">

                                <!-- start vontent header -->
                                <section class="content-header mb-3">
                                    <section class="d-flex justify-content-between align-items-center">
                                        <h2 class="content-header-title content-header-title-small">
                                            کد تخفیف
                                        </h2>
                                        <section class="content-header-link">
                                            <!--<a href="#">مشاهده همه</a>-->
                                        </section>
                                    </section>
                                </section>

                                <section class="payment-alert alert alert-primary d-flex align-items-center p-2"
                                         role="alert">
                                    <i class="fa fa-info-circle flex-shrink-0 me-2"></i>
                                    <secrion>
                                        کد تخفیف خود را در این بخش وارد کنید.
                                    </secrion>
                                </section>

                                <section class="row">
                                    <section class="col-md-5">
                                        <form action="<?php echo e(route('customer.sales-process.copan-discount')); ?>"
                                              method="post">
                                            <?php echo csrf_field(); ?>
                                            <section class="input-group input-group-sm">
                                                <input type="text" name="copan" class="form-control"
                                                       placeholder="کد تخفیف را وارد کنید">
                                                <button class="btn btn-primary" type="submit">اعمال کد</button>
                                            </section>
                                        </form>

                                    </section>

                                </section>
                            </section>


                            <section class="content-wrapper bg-white p-3 rounded-2 mb-4">

                                <!-- start vontent header -->
                                <section class="content-header mb-3">
                                    <section class="d-flex justify-content-between align-items-center">
                                        <h2 class="content-header-title content-header-title-small">
                                            انتخاب نوع پرداخت
                                        </h2>
                                        <section class="content-header-link">
                                            <!--<a href="#">مشاهده همه</a>-->
                                        </section>
                                    </section>
                                </section>
                                <section class="payment-select">

                                    <section class="payment-alert alert alert-primary d-flex align-items-center p-2"
                                             role="alert">
                                        <i class="fa fa-info-circle flex-shrink-0 me-2"></i>
                                        <secrion>
                                            برای پیشگیری از انتقال ویروس کرونا پیشنهاد می کنیم روش پرداخت اینترنتی رو
                                            پرداخت کنید.
                                        </secrion>
                                    </section>


                                    <form action="<?php echo e(route('customer.sales-process.payment-submit')); ?>" method="post"
                                          id="payment_submit">
                                        <?php echo csrf_field(); ?>

                                        <input type="radio" name="payment_type" value="1" id="d1"/>
                                        <label for="d1" class="col-12 col-md-4 payment-wrapper mb-2 pt-2">
                                            <section class="mb-2">
                                                <i class="fa fa-credit-card mx-1"></i>
                                                پرداخت آنلاین
                                            </section>
                                            <section class="mb-2">
                                                <i class="fa fa-calendar-alt mx-1"></i>
                                                درگاه پرداخت زرین پال
                                            </section>
                                        </label>

                                        <section class="mb-2"></section>

                                        <input type="radio" name="payment_type" value="2" id="d2"/>
                                        <label for="d2" class="col-12 col-md-4 payment-wrapper mb-2 pt-2">
                                            <section class="mb-2">
                                                <i class="fa fa-id-card-alt mx-1"></i>
                                                پرداخت آفلاین
                                            </section>
                                            <section class="mb-2">
                                                <i class="fa fa-calendar-alt mx-1"></i>
                                                حداکثر در 2 روز کاری بررسی می شود
                                            </section>
                                        </label>

                                        <section class="mb-2"></section>

                                        <input type="radio" name="payment_type" value="3" id="cash_payment"/>
                                        <label for="cash_payment" class="col-12 col-md-4 payment-wrapper mb-2 pt-2">
                                            <section class="mb-2">
                                                <i class="fa fa-money-check mx-1"></i>
                                                پرداخت در محل
                                            </section>
                                            <section class="mb-2">
                                                <i class="fa fa-calendar-alt mx-1"></i>
                                                پرداخت به پیک هنگام دریافت کالا
                                            </section>
                                        </label>
                                    </form>


                                </section>
                            </section>


                        </section>
                        <section class="col-md-3">
                            <section class="content-wrapper bg-white p-3 rounded-2 cart-total-price">
                                <?php
                                    $totalProductPrice = 0;
                                    $totalDiscount = 0;
                                ?>

                                <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $totalProductPrice += $cartItem->cartItemProductPrice() * $cartItem->number;
                                        $totalDiscount += $cartItem->cartItemProductDiscount() * $cartItem->number;
                                    ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <section class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted">قیمت کالاها (<?php echo e($cartItems->count()); ?>)</p>
                                    <p class="text-muted"><span
                                            id="total_product_price"><?php echo e(priceFormat($totalProductPrice)); ?></span> تومان
                                    </p>
                                </section>

                                <?php if($totalDiscount != 0): ?>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class="text-muted">تخفیف کالاها</p>
                                        <p class="text-danger fw-bolder"><span
                                                id="total_discount"><?php echo e(priceFormat($totalDiscount)); ?></span> تومان</p>
                                    </section>
                                <?php endif; ?>

                                <section class="border-bottom mb-3"></section>


                                <?php if($order->commonDiscount != null): ?>
                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class="text-muted">میزان تخفیف عمومی</p>
                                        <p class="text-danger fw-bolder"><span
                                                id="total_discount"><?php echo e(priceFormat($order->commonDiscount->percentage)); ?></span>
                                            درصد</p>
                                    </section>

                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class="text-muted">میزان حداکثر تخفیف عمومی</p>
                                        <p class="text-danger fw-bolder"><span
                                                id="total_discount"><?php echo e(priceFormat($order->commonDiscount->discount_ceiling)); ?></span>
                                            تومان</p>
                                    </section>



                                    <section class="d-flex justify-content-between align-items-center">
                                        <p class="text-muted">حداقل موجودی سبد خرید</p>
                                        <p class="text-danger fw-bolder"><span
                                                id="total_discount"><?php echo e(priceFormat($order->commonDiscount->minimal_order_amount)); ?></span>
                                            تومان</p>
                                    </section>

                                <?php endif; ?>


                                <section class="border-bottom mb-3"></section>
                                <section class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted">جمع سبد خرید</p>
                                    <p class="fw-bolder"><span
                                            id="total_price"><?php echo e(priceFormat($order->order_final_amount)); ?></span>
                                        تومان</p>
                                </section>

                                <p class="my-3">
                                    <i class="fa fa-info-circle me-1"></i>کاربر گرامی خرید شما هنوز نهایی نشده است. برای
                                    ثبت سفارش و تکمیل خرید باید ابتدا آدرس خود را انتخاب کنید و سپس نحوه ارسال را انتخاب
                                    کنید. نحوه ارسال انتخابی شما محاسبه و به این مبلغ اضافه شده خواهد شد. و در نهایت
                                    پرداخت
                                    این سفارش صورت میگیرد.
                                </p>


                                <section class="">
                                    <button type="button"
                                            onclick="document.getElementById('payment_submit').submit();"
                                            class="btn btn-danger d-block w-100">تکمیل فرآیند خرید
                                    </button>
                                </section>

                            </section>
                        </section>
                    </section>
                </section>
            </section>

        </section>
    </section>
    <!-- end cart -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    <script>
        $(function () {
            $('#cash_payment').click(function () {
                var newDiv = document.createElement('div');
                newDiv.innerHTML = `
                <section class="input-group input-group-sm">
                    <input type="text" name="cash_receiver" class="form-control" form="payment_submit" placeholder="نام و نام خانوادگی دریافت کننده" >
                </section>
                `;
                document.getElementsByClassName('content-wrapper')[1].appendChild(newDiv)
            })
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.master-two-col', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\CODEX\techzilla\resources\views/customer/sales-process/payment.blade.php ENDPATH**/ ?>