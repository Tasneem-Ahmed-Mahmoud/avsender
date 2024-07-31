@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/planing.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/services.css') }}">

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection

@section('content')
<div class="faq_hero_container_section">
    <div class="row hero-image-Services-col">
        <div class="col-12 hero_container Services_container-feature">
            <div>
                <h3 class="hero_h3">{{ $feature->title }}</h3>
                <p class="hero_p">{{ $feature->excerpt->value ?? '' }}</p>
                <a href="#">
                    <button class="btn btn-button-hero">{{ __('Work With Us') }}</button>
                </a>
            </div>
        </div>
        <div class="col-10 hero-image-Services-rest hero-image-Services">
            <img alt="hero-image-Services" src="{{ asset($feature->banner->value ?? '') }}" />
        </div>
    </div>
    
   

    <div class="content_container_cards pt-5 pb-5">
        <div class="container">
            <div class="row mt-2">
                {{-- services --}}
                @foreach ($feature->featureServices as $service)
                    <div class="col-lg-4 col-6 mt-4">
                        <div class="Services-box">
                            <div>
                                <img src="{{ asset($service->photo) }}" alt="imag-chat" class="features-image Services-image-card" />
                                <h3 class="Services-card-h3">{{ $service->description }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- subscribe now --}}
        <div class="oval-img-div">
            <div class="container">
                <div class="row container-Subscribe">
                    <div class="col-md-9 d-flex align-items-center">
                        <h3 class="container-Subscribe-h3">{{ __('You can try send bulk messages by registration for FREE') }}</h3>
                    </div>
                    <div class="col-md-3">
                        <button class="Subscribe-btn btn">{{ __('Subscribe Now') }}</button>
                    </div>
                </div>
            </div>
            <div class="oval-img">
                <img src="./images/Oval.png" />
            </div>
            <div class="oval-img-left">
                <img src="./images/Oval-two.png" />
            </div>
        </div>

        {{-- instructions --}}
        <div class="container">
            <div class="How_to_work_section">
                <h2 class="How_to_work_section_h2">{{ __('How to work on the services ?') }}</h2>
                @foreach ($feature->featureInstructions as $instruction)
                    <div>
                        <p class="How_to_work_section_p">{{ $loop->iteration . '-' . $instruction->instruction }}</p>
                        <div class="How_to_work_section_div-img">
                            <img src="{{ asset($instruction->photo ?? '') }}" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        @include('frontend.pricings')

     {{-- features --}}
         <div class="container">
            <h2 class="How_to_work_section_h2-caro ">Browse other services of AVSENDER</h2>
        
          <div class="faq__content_container" id="box-home">
                <div class="container">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                           @foreach ($features as $feat )
                               
                         
                            <div class="swiper-slide">
                                <div class="Features-box">
                                    <img src="{{ asset($feat->preview->value ?? '') }}" alt="imag-chat" class="features-image" />
                                    <a href="{{ url('feature/'.$feat->slug) }}">      <h3 class="Features-box_h3">{{ Str::limit($feat->title,20) }}</h3></a>
                                          <p class="Features-box-p">{{  Str::limit($feat->excerpt->value ?? '',100) }}.</p>
                                          <a href="{{ url('feature/'.$feat->slug) }}" class="Read_More">Read More <img src="{{ asset('frontend/assets/images/home') }}/ei_arrow-up.svg"
                                                  class="mx-1" alt="arrow-up" /></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                     

                    </div>
                </div>
            </div> 
           </div> 



    </div>
</div>





@endsection


@section('script')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.btn-swiper-button-next',
            prevEl: '.btn-swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
        },
    });
</script>
    
@endsection
