<aside id="sidebar" class="sidebar col-md-3">
    <section class="content-wrapper bg-white p-3 rounded-2 mb-3">
        <!-- start sidebar nav-->
        <section class="sidebar-nav">
            <section class="sidebar-nav-item">
                    <span class="sidebar-nav-item-title"><a class="p-3"
                                                            href="{{ route('customer.profile.orders') }}">سفارش های من</a></span>
            </section>
            <section class="sidebar-nav-item">
                    <span class="sidebar-nav-item-title"><a class="p-3"
                                                            href="{{ route('customer.profile.addresses') }}">آدرس های من</a></span>
            </section>
            <section class="sidebar-nav-item">
                <span class="sidebar-nav-item-title"><a class="p-3" href="{{ route('customer.profile.favorites') }}">لیست علاقه مندی</a></span>
            </section>
            <section class="sidebar-nav-item">
                    <span class="sidebar-nav-item-title"><a class="p-3"
                                                            href="{{ route('customer.profile.info') }}">ویرایش حساب</a></span>
            </section>
            <section class="sidebar-nav-item">
                <span class="sidebar-nav-item-title"><a class="p-3" href="{{ route('auth.customer.logout') }}">خروج از حساب کاربری</a></span>
            </section>

        </section>
        <!--end sidebar nav-->
    </section>

</aside>
