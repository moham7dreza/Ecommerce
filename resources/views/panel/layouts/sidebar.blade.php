<div class="container-fluid side-bar-container ">
    <header class="pb-0">
        <a class="navbar-brand ">
            <object class="side-logo" data="{{ asset('panel-assets/svg/logo-8.svg') }}" type="image/svg+xml">
            </object>
        </a>
    </header>
    <p class="side-comment fnt-mxs">زیر مجموعه های تک زیلا</p>
    <li class="side a-collapse short m-2 pr-1 pl-1">
        <a href="{{ route('customer.home') }}" class="side-item selected c-dark"><i class="fas fa-language mr-1"></i>فروشگاه
            <span
                class="badge badge-pill badge-success">تک زیلا</span></a>
    </li>
    <li class="side a-collapse short m-2 pr-1 pl-1">
        <a href="{{ route('it-city.home') }}" class="side-item selected c-dark "><i class="fas fa-language  mr-1"></i>آیتی
            سیتی
            <span
                class="badge badge-pill badge-success">اسمبل</span></a>
    </li>
    <li class="side a-collapse short m-2 pr-1 pl-1">
        <a href="{{ route('digital-world.home') }}" class="side-item selected c-dark "><i
                class="fas fa-language mr-1"></i>دنیای دیجیتالی
            <span
                class="badge badge-pill badge-success">تکنولوژی</span></a>
    </li>

    <p class="side-comment fnt-mxs">ناوبری</p>
    <li class="side a-collapse short ">
        <a href="{{ route('panel.home') }}" class="side-item "><i class="fas fa-fan fa-spin mr-1"></i>پیشخوان</a>
    </li>
    <li class="side a-collapse short ">
        <a href="{{ route('panel.category.index') }}" class="side-item "><i class="fas fa-fan fa-spin mr-1"></i>دسته
            بندی</a>
    </li>
    <li class="side a-collapse short">
        <a href="{{ route('panel.menu.index') }}" class="side-item "><i class="fas fa-fan fa-spin mr-1"></i>منوها</a>
    </li>
    <li class="side a-collapse short">
        <a href="{{ route('panel.banner.index') }}" class="side-item "><i class="fas fa-fan fa-spin mr-1"></i>بنرها</a>
    </li>
    <li class="side a-collapse short">
        <a href="{{ route('panel.setting.index') }}" class="side-item "><i class="fas fa-fan fa-spin mr-1"></i>تنظیمات</a>
    </li>
    <li class="side a-collapse short">
        <a href="{{ route('panel.user.index') }}" class="side-item "><i class="fas fa-fan fa-spin mr-1"></i>کاربران</a>
    </li>
    <li class="side a-collapse short">
        <a href="{{ route('panel.comment.index') }}" class="side-item "><i class="fas fa-fan fa-spin mr-1"></i>نظرات</a>
    </li>
    <li class="side a-collapse short">
        <a href="{{ route('panel.post.index') }}" class="side-item "><i class="fas fa-fan fa-spin mr-1"></i>پست</a>
    </li>
    <p class="side-comment fnt-mxs">پیسی پارت پیک</p>
    <li class="side a-collapse short">
        <a href="{{ route('panel.brand.index') }}" class="side-item "><i class="fas fa-fan fa-spin mr-1"></i>برندها</a>
    </li>
    <li class="side a-collapse short">
        <a href="{{ route('panel.hardware.index') }}" class="side-item "><i class="fas fa-fan fa-spin mr-1"></i>سخت افزار</a>
    </li>
    <li class="side a-collapse short">
        <a href="{{ route('panel.service.index') }}" class="side-item "><i class="fas fa-fan fa-spin mr-1"></i>سرویس</a>
    </li>
    <ul class="side a-collapse short">
        <a class="ul-text fnt-mxs"><i class="fas fa-cog mr-1"></i> سیستم
            <!-- <span	class="badge badge-success">4</span> -->
            <i class="fas fas fa-chevron-down arrow"></i></a>
        <div class="side-item-container hide animated">
            <li class="side-item"><a href="./color.html" class="fnt-mxs"><i class="fas fa-angle-right mr-2"></i>دسته
                    بندی</a>
            </li>
            <li class="side-item"><a href="./typo.html" class="fnt-mxs"><i class="fas fa-angle-right mr-2"></i>کلاس</a>
            </li>
            <li class="side-item"><a href="./dark-mode.html" class="fnt-mxs"><i class="fas fa-angle-right mr-2"></i>نسل
                    پردازنده</a></li>
            <li class="side-item"><a href="./rtl.html" class="fnt-mxs"><i class="fas fa-angle-right mr-2"></i>کانفیگ و
                    رم</a></li>
            <li class="side-item"><a href="./sidebar.html" class="fnt-mxs"><i class="fas fa-angle-right mr-2"></i>سیستم
                    های پیشنهادی</a></li>
        </div>
    </ul>
    <li class="side a-collapse short">
{{--        <a href="{{ route('panel.brand.index') }}" class="side-item "><i class="fas fa-fan fa-spin mr-1"></i>برند</a>--}}
    </li>


    <p class="side-comment fnt-mxs">ربات تلگرام</p>
    <li class="side a-collapse short">
        <a href="{{ route('panel.bot.message') }}" class="side-item "><i class="fas fa-fan fa-spin mr-1"></i>ارسال پیام</a>
    </li>

    <p class="side-comment  fnt-mxs">گزارشات</p>
    <li class="side a-collapse short">
        <a href="{{ route('panel.reports.charts.sales') }}" class="side-item "><i class="fas fa-fan fa-spin mr-1"></i>نمودار
            فروش</a>
    </li>

</div>
