@extends('customer.layouts.master-one-col')
@section('head-tag')
    <title>
        پروفایل کاربری
    </title>
@endsection
@php
    $user = auth()->user();
@endphp
@section('content')
    <section id="main-body-two-col" class="container-xxl body-container mb-5">
        <section class="row">
            <aside id="sidebar" class="sidebar col-md-3">
                <section class="content-wrapper bg-white p-3 rounded-2 mb-3">
                    <!-- start sidebar nav-->
                    <section class="sidebar-nav">
                        <section class="sidebar-nav-item">
                    <span class="sidebar-nav-item-title"><a class="p-3"
                                                            href="{{ route('user.orders') }}">سفارش های من</a></span>
                        </section>
                        <section class="sidebar-nav-item">
                    <span class="sidebar-nav-item-title"><a class="p-3"
                                                            href="{{ route('user.addresses') }}">آدرس های من</a></span>
                        </section>
                        <section class="sidebar-nav-item">
                            <span class="sidebar-nav-item-title"><a class="p-3" href="{{ route('user.favorites') }}">لیست علاقه مندی</a></span>
                        </section>
                        <section class="sidebar-nav-item">
                    <span class="sidebar-nav-item-title"><a class="p-3"
                                                            href="{{ route('user.profile') }}">ویرایش حساب</a></span>
                        </section>
                        <section class="sidebar-nav-item">
                            <span class="sidebar-nav-item-title"><a class="p-3" href="{{ route('auth.customer.logout') }}">خروج از حساب کاربری</a></span>
                        </section>

                    </section>
                    <!--end sidebar nav-->
                </section>

            </aside>
            <main id="main-body" class="main-body col-md-9">
                <section class="content-wrapper bg-white p-3 rounded-2 mb-2">

                    <!-- start content header -->
                    <section class="content-header mb-4">
                        <section class="d-flex justify-content-between align-items-center">
                            <h2 class="content-header-title">
                                <span>اطلاعات حساب</span>
                            </h2>
                            <section class="content-header-link">
                                <!--<a href="#">مشاهده همه</a>-->
                            </section>
                        </section>
                    </section>
                    <!-- end content header -->

                    <section class="d-flex justify-content-end my-4">
                        <a class="btn btn-link btn-sm text-info text-decoration-none mx-1" href="#"><i
                                class="fa fa-edit px-1"></i>ویرایش
                            حساب</a>
                    </section>


                    <section class="row">
                        <section class="col-6 border-bottom mb-2 py-2">
                            <section class="field-title">نام</section>
                            <section class="field-value overflow-auto">{{ $user->first_name }}</section>
                        </section>

                        <section class="col-6 border-bottom my-2 py-2">
                            <section class="field-title">نام خانوادگی</section>
                            <section class="field-value overflow-auto">{{ $user->last_name }}</section>
                        </section>

                        <section class="col-6 border-bottom my-2 py-2">
                            <section class="field-title">شماره تلفن همراه</section>
                            <section class="field-value overflow-auto">{{ $user->mobile }}</section>
                        </section>

                        <section class="col-6 border-bottom my-2 py-2">
                            <section class="field-title">ایمیل</section>
                            <section class="field-value overflow-auto">{{ $user->email }}</section>
                        </section>

                        <section class="col-6 my-2 py-2">
                            <section class="field-title">کد ملی</section>
                            <section class="field-value overflow-auto">{{ $user->national_code }}</section>
                        </section>

                        <section class="col-6 my-2 py-2">
                            <section class="field-title">رمز عبور</section>
                            <section class="field-value overflow-auto"> ---</section>
                        </section>

                    </section>
                </section>
            </main>
        </section>
    </section>
@endsection
