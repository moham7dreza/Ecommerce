<header class="main-header header-style-2 mb-40">
    <div class="header-bottom header-sticky background-white text-center">
        <div class="scroll-progress gradient-bg-1"></div>
        <div class="mobile_menu d-lg-none d-block"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3">
                    <div class="header-logo d-none d-lg-block">
                        <a href="{{ route('digital-world.home') }}">
                            <img class="logo-img d-inline" src="{{ asset('news-viral-assets/imgs/logo.svg') }}"
                                 alt="{{ $setting->title }}">
                        </a>
                    </div>
                    <div class="logo-tablet d-md-inline d-lg-none d-none">
                        <a href="{{ route('digital-world.home') }}">
                            <img class="logo-img d-inline" src="{{ asset('news-viral-assets/imgs/logo.svg') }}"
                                 alt="{{ $setting->title }}">
                        </a>
                    </div>
                    <div class="logo-mobile d-block d-md-none">
                        <a href="{{ route('digital-world.home') }}">
                            <img class="logo-img d-inline" src="{{ asset('news-viral-assets/imgs/favicon.svg') }}"
                                 alt="{{ $setting->title }}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 main-header-navigation">
                    <div class="main-nav text-right float-lg-right float-md-left">
                        <ul class="mobi-menu d-none menu-3-columns" id="navigation">
                            <li class="cat-item cat-item-2"><a href="{{ route('digital-world.home') }}">صفحه اصلی</a>
                            </li>
                            <li class="cat-item cat-item-3"><a href="{{ route('digital-world.posts.all') }}">پست ها</a>
                            </li>
                            <li class="cat-item cat-item-4"><a href="{{ route('digital-world.posts.authors') }}">نویسنده
                                    ها</a></li>
                            @auth
                                <li class="cat-item cat-item-5"><a href="#">{{ auth()->user()->fullName }}</a></li>
                                <li class="cat-item cat-item-6"><a href="">خروج</a></li>
                            @endauth
                            @guest
                                <li class="cat-item cat-item-7"><a href="">ثبت نام</a></li>
                                <li class="cat-item cat-item-2"><a href="">ورود</a></li>
                            @endguest
                        </ul>
                        <nav>
                            <ul class="main-menu d-none d-lg-inline">
                                <li>
                                    <a href="{{ route('digital-world.home') }}">
                                        صفحه اصلی
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('digital-world.posts.all') }}">
                                        پست ها
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('digital-world.posts.authors') }}">
                                        نویسنده ها
                                    </a>
                                </li>
                                <li class="mega-menu-item">
                                    <a href="#">
                                        دسته بندی ها
                                    </a>
                                    <div class="sub-mega-menu sub-menu-list row text-muted font-small">
                                        @foreach ($categories->chunk(5) as $item)
                                            <ul class="col-md-2">
                                                @foreach ($item as $category)
                                                    <li><a href="{{ $category->path() }}">{{ $category->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        @endforeach
                                    </div>
                                </li>
                                {{--                                <li> TODO --}}
                                {{--                                    <a href="{{ route('contacts.create') }}">تماس با ما</a>--}}
                                {{--                                </li>--}}
                                @auth

{{--                                    <li>--}}
{{--                                        <a href="">--}}
{{--                                            <span class="ml-15">--}}
{{--                                                <ion-icon name="mail-unread-outline"></ion-icon>--}}
{{--                                            </span>--}}
{{--                                            پروفایل--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                    <li>
                                        <a href="{{ route('digital-world.user.favorites') }}">
                                            علاقه مندی
                                        </a>
                                    </li>
{{--                                    <li>--}}
{{--                                        <a href="">--}}
{{--                                            <span class="ml-15">--}}
{{--                                                <ion-icon name="mail-unread-outline"></ion-icon>--}}
{{--                                            </span>--}}
{{--                                            لاگ اوت--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                    <li class="mega-menu-item">
                                        <a type="button"
                                           class="social-icon instagram-icon text-xs-center"
                                           data-bs-toggle="tooltip" data-bs-placement="left"
                                           title="اعلان ها"><i
                                                class="ti-bell"></i></a>
                                        <div class="sub-mega-menu sub-menu-list row text-muted font-small">
                                            @if(count($notifications) > 0)
                                                @foreach ($notifications->chunk(5) as $item)
                                                    <ul class="col-md-6">
                                                        @foreach ($item as $notification)
                                                            <li><a href="#">{{ $notification['data']['message'] }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endforeach
                                            @else
                                                <ul class="col-md-6">
                                                    <li>هیچ اعلانی برای شما وجود ندارد.</li>
                                                </ul>
                                            @endif
                                        </div>
                                    </li>

                                    <li class="mega-menu-item">
                                        <a type="button"
                                           class="social-icon instagram-icon text-xs-center"
                                           data-bs-toggle="tooltip" data-bs-placement="left"
                                           title="نظر ها"><i
                                                class="ti-comments"></i></a>
                                        <div class="sub-mega-menu sub-menu-list row text-muted font-small">
                                            @if(count($unseenComments) > 0)
                                                @foreach ($unseenComments->chunk(5) as $item)
                                                    <ul class="col-md-6">
                                                        @foreach ($item as $unseenComment)
                                                            <li>
                                                                <h6>{{ $unseenComment->user->fullName }}</h6>
                                                                <span><i
                                                                        class="ti-alert m-1"></i>{{ $unseenComment->body }}
                                                                </span>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endforeach
                                            @else
                                                <ul class="col-md-6">
                                                    <li>هیچ نظری برای شما وجود ندارد.</li>
                                                </ul>
                                            @endif
                                        </div>
                                    </li>
                                @endauth
                                @guest
                                    <li>
                                        <a href="">
                                            <span class="ml-15">
                                                <ion-icon name="mail-unread-outline"></ion-icon>
                                            </span>
                                            ثبت نام
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="ml-15">
                                                <ion-icon name="mail-unread-outline"></ion-icon>
                                            </span>
                                            ورود
                                        </a>
                                    </li>
                                @endauth
                            </ul>
                        </nav>
                    </div>
                    <form action="#" method="get"
                          class="search-form d-lg-inline float-left position-relative ml-30 d-none">
                        <input type="text" class="search_field" placeholder="جستجو ..." value="" name="s">
                        <span class="search-icon"><i class="ti-search mr-5"></i></span>
                    </form>
                    <div class="off-canvas-toggle-cover">
                        <div class="off-canvas-toggle hidden d-inline-block mr-15" id="off-canvas-toggle">
                            <ion-icon name="grid-outline"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
