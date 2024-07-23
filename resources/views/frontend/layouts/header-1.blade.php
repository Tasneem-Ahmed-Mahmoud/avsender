<header>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4NF6R8XCJW">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4NF6R8XCJW');
    </script>

    <div id="header-sticky"
        class="tp-header__area tp-header__space tp-header__transparent tp-header__menu-space z-index-5 ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-2 col-lg-2 col-md-6 col-8">
                    <div class="tp-header__logo">
                        <a href="{{ url('/') }}"><img
                                src="{{ asset(get_option('primary_data',true)->footer_logo ?? '') }}" alt=""></a>



                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 d-none d-lg-block  "
                    style="direction: {{ app()->isLocale('ar') ? 'ltr' : 'ltr' }}">
                    <div class="tp-header__main-menu tp-header__main-menu1 ">
                        <nav id="mobile-menu">

                            <ul class="d-flex align-items-center w-100  justify-content-center ">

                                {{ PrintMenu('main-menu') }}

                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-4  d-flex  justify-content-end">
                    <div class="dropdown">
                        <button class="dropdown-toggle  lang-btn ms-2 " type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            @if(app()->getLocale() == 'ar')
                            AR
                            <img src="https://cdn-icons-png.freepik.com/256/14009/14009778.png?ga=GA1.1.648065521.1707407535&semt=ais"
                                alt="Saudi Arabia Flag" class="lang-flag" style='width:30px;height:30px'>
                            @else
                            <img src="https://cdn-icons-png.freepik.com/256/412/412828.png?ga=GA1.1.648065521.1707407535&semt=ais"
                                alt="American Flag" class="lang-flag" style='width:30px;height:30px'>
                            EN
                            @endif
                        </button>
                        <ul class="dropdown-menu ps-2 " style="direction: {{ app()->isLocale('ar') ? 'ltr' : 'ltr' }}">
                            @foreach($languages as $code => $language)
                            <li class="mb-1 p-1">
                                <a class="text-black p-0 m-0" href="{{ route('switchLang', $code) }}">
                                    @if($language === 'Arabic')
                                    <img src="https://cdn-icons-png.freepik.com/256/14009/14009778.png?ga=GA1.1.648065521.1707407535&semt=ais"
                                        alt="Saudi Arabia Flag" class="lang-flag" style='width:30px;height:30px'>
                                    @else
                                    <img src="https://cdn-icons-png.freepik.com/256/412/412828.png?ga=GA1.1.648065521.1707407535&semt=ais"
                                        alt="American Flag" class="lang-flag" style='width:30px;height:30px'>
                                    @endif
                                    {{ $language }}
                                </a>
                            </li>
                            @endforeach
                        </ul>

                    </div>

                    @guest
                    <div class="tp-header__right">
                        <a class="tp-btn d-none d-md-block me-3" href="{{  url('/login') }}"><span>{{ !Auth::check() ?
                                __('Log In') : __('Dashboard') }}</span></a>

                    </div>

                    @endguest

                    <div class="tp-header__right">
                        <a class="tp-btn d-none d-md-block ms-3"
                            href="{{ !Auth::check() ? url('/pricing') : url('/login') }}"><span>{{ !Auth::check() ?
                                __('Get Started') : __('Dashboard') }}</span></a>
                        <a class="tp-header__bars tp-menu-bar" href="javascript:void(0)"><i class="fas fa-bars"></i></a>
                    </div>



                </div>


            </div>
        </div>
    </div>

</header>
<!-- tp-offcanvus-area-start -->
<div class="tp-offcanvas-area">
    <div class="tpoffcanvas">
        <div class="tpoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="tpoffcanvas__logo">
            <a href="{{ url('/') }}"><img src="{{ asset(get_option('primary_data',true)->footer_logo ?? '') }}"
                    alt=""></a>
        </div>
        <div class="tpoffcanvas__text ">
            <p>{{ get_option('header_footer',true,true,false,current_locale())->footer->description ?? '' }}</p>
        </div>
        <div class="mobile-menu"></div>
        <div class="tpoffcanvas__info">
            <h3 class="offcanva-title">{{ __('Get In Touch') }}</h3>
            <div class="tp-info-wrapper mb-20 d-flex align-items-center">
                <div class="tpoffcanvas__info-icon">
                    <a
                        href="maito:{{ get_option('primary_data',true,true,false,current_locale())->contact_email ?? '' }}"><i
                            class="fal fa-envelope"></i></a>
                </div>
                <div class="tpoffcanvas__info-address">
                    <span>{{ __('Email') }}</span>
                    <a
                        href="maito:{{ get_option('primary_data',true,true,false,current_locale())->contact_email ?? '' }}">{{
                        get_option('primary_data',true,true,false,current_locale())->contact_email ?? '' }}</a>
                </div>
            </div>
            <div class="tp-info-wrapper mb-20 d-flex align-items-center">
                <div class="tpoffcanvas__info-icon">
                    <a
                        href="tel:{{ get_option('primary_data',true,true,false,current_locale())->contact_phone ?? '' }}"><i
                            class="fal fa-phone-alt"></i></a>
                </div>
                <div class="tpoffcanvas__info-address">
                    <span>{{ __('Phone') }}</span>
                    <a
                        href="tel:{{ get_option('primary_data',true,true,false,current_locale())->contact_phone ?? '' }}">{{
                        get_option('primary_data',true,true,false,current_locale())->contact_phone ?? '' }}</a>
                </div>
            </div>
            <div class="tp-info-wrapper mb-20 d-flex align-items-center">
                <div class="tpoffcanvas__info-icon">
                    <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                </div>
                <div class="tpoffcanvas__info-address">
                    <span>{{ __('Address') }}</span>
                    <a href="javascript:void(0)">{{ get_option('primary_data',true,true,false,current_locale())->address
                        ?? '' }}</a>
                </div>
            </div>
        </div>
        <div class="tpoffcanvas__social">
            <div class="social-icon">
                @if(!empty(get_option('primary_data',true,true,false,current_locale())->socials->twitter))
                <a href="{{ get_option('primary_data',true,true,false,current_locale())->socials->twitter }}"><i
                        class="fab fa-twitter"></i></a>
                @endif
                @if(!empty(get_option('primary_data',true,true,false,current_locale())->socials->instagram))
                <a href="{{ get_option('primary_data',true,true,false,current_locale())->socials->instagram }}"><i
                        class="fab fa-instagram"></i></a>
                @endif
                @if(!empty(get_option('primary_data',true,true,false,current_locale())->socials->facebook))
                <a href="{{ get_option('primary_data',true,true,false,current_locale())->socials->facebook }}"><i
                        class="fab fa-facebook-square"></i></a>
                @endif
                @if(!empty(get_option('primary_data',true,true,false,current_locale())->socials->linkedin))
                <a href="{{ get_option('primary_data',true,true,false,current_locale())->socials->linkedin }}"><i
                        class="fab fa-linkedin"></i></a>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- tp-offcanvus-area-end -->