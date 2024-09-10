<header class="header">
    <div class="container-fluid header__top   ">
        <div class="container">
            <div class="d-flex flex-column justify-content-center align-items-between" >
                <div class="header__content">
                    <h1 data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" 
                    data-aos-easing="linear">{!! __('Home Title') !!}</h1>
                    <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="150" 
                    data-aos-easing="linear" >{{ __('Home Description') }}</p>
                    <a data-aos="zoom-in" data-aos-duration="500" data-aos-delay="200" 
                    data-aos-easing="linear"  href="{{ url('/about') }}" class=" btn btn-work-with-us">{{ __('Work With Us') }}</a>
                </div>
                <div class="header__image  ">
                    <figure class=" header__img-container  d-flex justify-content-center flex-column align-items-center ">
                        <img src="{{ asset('frontend/assets/images/home') }}/hero-image-statistic.svg" alt="hero-image"
                            class="w-75 big-img" />
                        <div class="header__square ">
                            <img
                                src="{{ asset('frontend/assets/images/home/' . (app()->getLocale() == 'ar' ? 'Trusted-ar.svg' : 'Trusted.svg')) }}" />
                        </div>
                    </figure>
                </div>
            </div>

        </div>

        <div class="header__social  d-flex justify-content-center align-items-center flex-column">
            <div >
                <a href="https://wa.me/966555466532" target="_blank">
                    <img src="{{ asset('frontend/assets/images/home') }}/whats-app-hero.svg" alt="WhatsApp Icon"
                        class="w-100" />
                </a>
            </div>
            <div>
                <a href="https://avnology.com" target="_blank"><img
                        src="{{ asset('frontend/assets/images/home') }}/google-hero.svg" alt="google"
                        class="w-100" /></a>
            </div>
            <div>
                <a href="https://www.instagram.com/avnologysender/" target="_blank"> <img
                        src="{{ asset('frontend/assets/images/home') }}/insta-hero.svg" alt="insta"
                        class="w-100" /></a>
            </div>
        </div>

    </div>




</header>
