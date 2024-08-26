
<header class="header">
    <div class="container-fluid header__top   ">
        <div class="container">
          <div class="d-flex flex-column justify-content-center align-items-between vh-100">
            <div class="header__content">
                <h1>{!! __('Home Title') !!}</h1>
                <p>{{ __("Home Description") }}</p>
                <a href="{{ url('/about') }}" class=" btn btn-work-with-us">{{ __('Work With Us') }}</a>
            </div>
            <div class="header__image  ">
                <figure class="justify-content-center  d-flex header__img-container">
                    <img src="{{ asset('frontend/assets/images/home') }}/hero-image-statistic.svg" alt="hero-image"
                        class="w-75 big-img" />
                    <div class="header__square">
                        <img
                            src="{{ asset('frontend/assets/images/home/' . (app()->getLocale() == 'ar' ? 'Trusted-ar.svg' : 'Trusted.svg')) }}" />
                    </div>
                </figure>
            </div>
          </div>

        </div>

        <div class="header__social  d-flex justify-content-center align-items-center flex-column">
            <div>
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
                        src="{{ asset('frontend/assets/images/home') }}/insta-hero.svg" alt="insta" class="w-100" /></a>
            </div>
        </div>

    </div>




</header>

