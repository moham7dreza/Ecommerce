@extends('it-city.layouts.master')
@section('head-tag')
    <title>
        آیتی سیتی
    </title>
@endsection

@section('content')
    @include('it-city.layouts.partials.slider')

    <!-- section heading systems intro -->
    <div class="section padding_layout_1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="main_heading text_align_center">
                            <h2>سیستم اسمبل هوشمند</h2>
                            <p class="large">قطعات سیستم تون رو همین حالا با بهترین قیمت خودتون اسمبل کنید.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="full text_align_center margin_bottom_30">
                        <div class="center">
                            <div class="icon"><img src="{{ asset('it-next-assets/gaming.png') }}" alt="#"/></div>
                        </div>
                        <h4 class="theme_color">سیستم های گیمینگ</h4>
                        <p>فریم ریت بالا - اجرای بازی های روز با بالاترین کیفیت</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="full text_align_center margin_bottom_30">
                        <div class="center">
                            <div class="icon"><img src="{{ asset('it-next-assets/gaming.png') }}" alt="#"/></div>
                        </div>
                        <h4 class="theme_color">سیستم های گیمینگ</h4>
                        <p>فریم ریت بالا - اجرای بازی های روز با بالاترین کیفیت</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="full text_align_center margin_bottom_30">
                        <div class="center">
                            <div class="icon"><img src="{{ asset('it-next-assets/gaming.png') }}" alt="#"/></div>
                        </div>
                        <h4 class="theme_color">سیستم های گیمینگ</h4>
                        <p>فریم ریت بالا - اجرای بازی های روز با بالاترین کیفیت</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="full text_align_center margin_bottom_30">
                        <div class="center">
                            <div class="icon"><img src="{{ asset('it-next-assets/gaming.png') }}" alt="#"/></div>
                        </div>
                        <h4 class="theme_color">سیستم های گیمینگ</h4>
                        <p>فریم ریت بالا - اجرای بازی های روز با بالاترین کیفیت</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- section hardware-->
    <div class="section padding_layout_1 border-bottom danger">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="main_heading text_align_center">
                            <h3>اجرای سخت افزاری</h3>
                            <p class="large">در هر دسته بندی</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($mostVisitedHardwares as $hardware)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all rtl text_align_center">
                        <div class="product_list">
                            <a href="{{ route('it-city.store.hardware', $hardware) }}">
                                <div class="product_img"><img class="img-responsive"
                                                              src="{{ asset('it-next-assets/system.png') }}" alt="">
                                </div>
                                <div class="product_detail_btm">
                                    <div class="center">
                                        <h5>{{ $hardware->name }}</h5>
                                    </div>
                                    <div class="starratin">
                                        <div class="center"><i class="fa fa-star" aria-hidden="true"></i> <i
                                                class="fa fa-star"
                                                aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                                                                             aria-hidden="true"></i> <i
                                                class="fa fa-star-o" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="product_price">
                                        <p><span class="old_price">۱۰۰۰۰۰ تومان</span> –
                                            <span
                                                class="new_price">{{ priceFormat($hardware->price)  }} تومان</span></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- section systems-->
    <div class="section padding_layout_1 border-bottom danger">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="main_heading text_align_center">
                            <h3>بهترین سیستم های تک زیلا</h3>
                            <p class="large">نمونه هایی از سیستم ها با کارایی و محبوبیت خوب از نظر مشتری</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($sampleOfAssembledSystems as $system)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all rtl text_align_center">
                        <div class="product_list">
                            <a href="#">
                                <div class="product_img"><img class="img-responsive"
                                                              src="{{ asset('it-next-assets/system.png') }}" alt="">
                                </div>
                                <div class="product_detail_btm">
                                    <div class="center">
                                        <h5>{{ $system->name }}</h5>
                                    </div>
                                    <div class="starratin">
                                        <div class="center"><i class="fa fa-star" aria-hidden="true"></i> <i
                                                class="fa fa-star"
                                                aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                                                                             aria-hidden="true"></i> <i
                                                class="fa fa-star-o" aria-hidden="true"></i></div>
                                    </div>
                                    <div class="product_price">
                                        <p><span class="old_price">۳۰۰۰۰۰۰ تومان</span> – <span
                                                class="new_price">{{ priceFormat($system->system_price)  }} تومان</span></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- section news -->
    <div class="section padding_layout_1 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="main_heading text_align_center">
                            <h3>آخرین اخبار از دنیای سخت افزار</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4 rtl text_align_right">
                    <div class="full blog_colum">
                        <div class="blog_feature_img"><img
                                src="{{ asset('it-next-assets/images/it_service/post-03.jpg') }}" alt="#"/></div>
                        <div class="post_time">
                            <p>{{ jalaliDate($post->created_at) }} <i class="fa fa-clock-o"></i></p>
                        </div>
                        <div class="blog_feature_head">
                            <h4>{{ $post->title }}</h4>
                        </div>
                        <div class="blog_feature_cont">
                            <p>{{ \Illuminate\Support\Str::limit($post->summary, 200) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- section staff -->
    <div class="section padding_layout_1 service_list border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="main_heading text_align_center">
                            <h2>پرسنل اسمبل سیستم</h2>
                            <p class="large">کارشناسان ما بارها در مطبوعات معرفی شده اند.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="full team_blog_colum">
                        <div class="it_team_img"><img class="img-responsive"
                                                      src="{{ asset('it-next-assets/images/it_service/team-member-1.jpg') }}"
                                                      alt="#"></div>
                        <div class="team_feature_head">
                            <h4>محمدرضا رضایی</h4>
                        </div>
                        <div class="team_feature_social">
                            <div class="social_icon">
                                <ul class="list-inline">
                                    <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook"
                                           target="_blank"></a></li>
                                    <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+"
                                           target="_blank"></a></li>
                                    <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter"
                                           target="_blank"></a></li>
                                    <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn"
                                           target="_blank"></a></li>
                                    <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram"
                                           target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="full team_blog_colum">
                        <div class="it_team_img"><img class="img-responsive"
                                                      src="{{ asset('it-next-assets/images/it_service/team-member-2.jpg') }}"
                                                      alt="#"></div>
                        <div class="team_feature_head">
                            <h4>سارا امینی</h4>
                        </div>
                        <div class="team_feature_social">
                            <div class="social_icon">
                                <ul class="list-inline">
                                    <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook"
                                           target="_blank"></a></li>
                                    <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+"
                                           target="_blank"></a></li>
                                    <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter"
                                           target="_blank"></a></li>
                                    <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn"
                                           target="_blank"></a></li>
                                    <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram"
                                           target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="full team_blog_colum">
                        <div class="it_team_img"><img class="img-responsive"
                                                      src="{{ asset('it-next-assets/images/it_service/team-member-3.jpg') }}"
                                                      alt="#"></div>
                        <div class="team_feature_head">
                            <h4>سینا حسینی</h4>
                        </div>
                        <div class="team_feature_social">
                            <div class="social_icon">
                                <ul class="list-inline">
                                    <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook"
                                           target="_blank"></a></li>
                                    <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+"
                                           target="_blank"></a></li>
                                    <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter"
                                           target="_blank"></a></li>
                                    <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn"
                                           target="_blank"></a></li>
                                    <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram"
                                           target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="full team_blog_colum">
                        <div class="it_team_img"><img class="img-responsive"
                                                      src="{{ asset('it-next-assets/images/it_service/team-member-2.jpg') }}"
                                                      alt="#"></div>
                        <div class="team_feature_head">
                            <h4>سارا</h4>
                        </div>
                        <div class="team_feature_social">
                            <div class="social_icon">
                                <ul class="list-inline">
                                    <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook"
                                           target="_blank"></a></li>
                                    <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+"
                                           target="_blank"></a></li>
                                    <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter"
                                           target="_blank"></a></li>
                                    <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn"
                                           target="_blank"></a></li>
                                    <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram"
                                           target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- section contact us -->
    {{--    <div class="section">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-md-12">--}}
    {{--                    <div class="full">--}}
    {{--                        <div class="contact_us_section rtl">--}}
    {{--                            <div class="call_icon"><img--}}
    {{--                                    src="{{ asset('it-next-assets/images/it_service/phone_icon.png') }}" alt="#"/></div>--}}
    {{--                            <div class="inner_cont">--}}
    {{--                                <h2>درخواست یک نقل قول رایگان</h2>--}}
    {{--                                <p>از افرادی که می خواهید پاسخ و مشاوره دریافت کنید.</p>--}}
    {{--                            </div>--}}
    {{--                            <div class="button_Section_cont"><a class="btn dark_gray_bt" href="it_contact.html">ارتباط--}}
    {{--                                    با ما</a></div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- end section -->

    <!-- section brand -->
    <div class="section padding_layout_1" style="padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <ul class="brand_list">
                            <li><img src="{{ asset('it-next-assets/nvidia-white-logo.png') }}" alt="#"/></li>
                            <li><img src="{{ asset('it-next-assets/nvidia-white-logo.png') }}" alt="#"/></li>
                            <li><img src="{{ asset('it-next-assets/nvidia-white-logo.png') }}" alt="#"/></li>
                            <li><img src="{{ asset('it-next-assets/nvidia-white-logo.png') }}" alt="#"/></li>
                            <li><img src="{{ asset('it-next-assets/nvidia-white-logo.png') }}" alt="#"/></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
@endsection
