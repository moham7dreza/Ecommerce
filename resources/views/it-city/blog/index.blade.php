@extends('it-city.layouts.master')
@section('head-tag')
    <title>
        بلاگ
    </title>
@endsection

@section('content')
    <!-- inner page banner -->
    <div id="inner_banner" class="section inner_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="title-holder">
                            <div class="title-holder-cell text-right">
                                <h1 class="page-title">بلاگ</h1>
                                <ol class="breadcrumb rtl">
                                    <li><a href="{{ route('it-city.home') }}">آیتی سیتی</a></li>
                                    <li><a href="{{ route('it-city.blog.index') }}">بلاگ</a></li>
                                    <li class="active">پست ها</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end inner page banner -->


    <!-- section -->
    <div class="section padding_layout_1 blog_list rtl text_align_right">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
                    <div class="full">
                        @foreach($posts as $post)
                            <div class="blog_section">
                                <div class="blog_feature_img"><img class="img-responsive"
                                                                   src="{{ asset('it-next-assets/images/it_service/post-06.jpg') }}"
                                                                   alt="#"></div>
                                <div class="blog_feature_cantant">
                                    <p class="blog_head">{{ $post->title ?? '-' }}</p>
                                    <div class="post_info">
                                        <ul>
                                            <li><i class="fa fa-user"
                                                   aria-hidden="true"></i> {{ $post->postCategory->name ?? '-' }}</li>
                                            <li><i class="fa fa-comment"
                                                   aria-hidden="true"></i> {{ $post->comment_count ?? 0 }}</li>
                                            <li><i class="fa fa-calendar"
                                                   aria-hidden="true"></i>{{ jalaliDate($post->created_at) }}</li>
                                        </ul>
                                    </div>
                                    <p>{{ $post->summary ?? '-' }}</p>
                                    <div class="bottom_info">
                                        <div class="pull-left"><a class="btn sqaure_bt"
                                                                  href="{{ route('it-city.blog.post.detail', $post) }}"><i
                                                    class="fa fa-angle-right"></i>
                                                ادامه مطلب </a></div>
                                        <div class="pull-right">

                                            <div class="social_icon">
                                                <ul>
                                                    <li class="fb"><a href="#"><i class="fa fa-facebook"
                                                                                  aria-hidden="true"></i></a></li>
                                                    <li class="twi"><a href="#"><i class="fa fa-twitter"
                                                                                   aria-hidden="true"></i></a></li>
                                                    <li class="gp"><a href="#"><i class="fa fa-google-plus"
                                                                                  aria-hidden="true"></i></a></li>
                                                    <li class="pint"><a href="#"><i class="fa fa-pinterest"
                                                                                    aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="shr">اشتراک گذاری :</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="center">
                            <ul class="pagination style_1">
                                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="it_blog_grid.html">2</a></li>
                                <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left">
                    <div class="side_bar">
                        <div class="side_bar_blog">
                            <h4>SEARCH</h4>
                            <div class="side_bar_search">
                                <div class="input-group stylish-input-group">
                                    <input class="form-control" placeholder="Search" type="text">
                                    <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span></div>
                            </div>
                        </div>
                        <div class="side_bar_blog">
                            <h4>ABOUT AUTHOR</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod tempor.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="side_bar_blog">
                            <h4>RECENT POST</h4>
                            <div class="recent_post">
                                <ul>
                                    <li>
                                        <p class="post_head"><a href="#">How To Look Up</a></p>
                                        <p class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i> Aug 20,
                                            2017</p>
                                    </li>
                                    <li>
                                        <p class="post_head"><a href="#">Compatible Inkjet Cartridge</a></p>
                                        <p class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i> Aug 20,
                                            2017</p>
                                    </li>
                                    <li>
                                        <p class="post_head"><a href="#">Treat That Oral Thrush Now</a></p>
                                        <p class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i> Aug 20,
                                            2017</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="side_bar_blog">
                            <h4>CATEGORIES</h4>
                            <div class="categary">
                                <ul>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Change Oil and Filter</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Brake Pads Replacement</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Timing Belt Replacement</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Pre-purchase Car Inspection</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> Starter Replacement</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="side_bar_blog">
                            <h4>TAG</h4>
                            <div class="tags">
                                <ul>
                                    <li><a href="#">Bootstrap</a></li>
                                    <li><a href="#">HTML5</a></li>
                                    <li><a href="#">Wordpress</a></li>
                                    <li><a href="#">Bootstrap</a></li>
                                    <li><a href="#">HTML5</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="side_bar_blog">
                            <h4>CATEGORIES</h4>
                            <div class="categary">
                                <ul>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> June (12)</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> January (12)</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> March (12)</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> November (12)</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> December (12)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
@endsection
