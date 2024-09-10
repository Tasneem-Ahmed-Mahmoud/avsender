@extends('frontend.inc.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/services.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection

@section('content')
    <!-- ################################## header ############################################### -->
    @include('frontend.inc.head-3', [
        'title' => $feature->title,
        'description' => $feature->excerpt->value ?? '',
        'image' => asset($feature->banner->value ?? ''),
    ])
    <!-- ################################## wrapper ############################################### -->
    <section class="wrapper" data-aos="fade-up" data-aos-duration="600" data-aos-delay="350" 
    data-aos-easing="linear">
        <div class="container">
            <div class="row">
                <div class="col-12 wrapper-content">
                    <h2 data-aos="zoom-in" data-aos-duration="500" data-aos-delay="150" 
                    data-aos-easing="linear">{{ $feature->title }}</h2>
                    <p data-aos="zoom-in" data-aos-duration="500" data-aos-delay="250" 
                    data-aos-easing="linear">
                        {{ $feature->longDescription->value }}
                </div>
            </div>
        </div>
    </section>
    <div class="faq_hero_container_section continer">

        <!-- ################################## services ############################################### -->


        <div class="content_container_cards pt-5 pb-5" data-aos="fade-up" data-aos-duration="600" data-aos-delay="350" 
        data-aos-easing="linear">
            <div class="container">
                <div class="row mt-2 ">
                    {{-- services --}}
                    @foreach ($feature->featureServices as $service)
                        <div class="col-lg-4 col-6 mt-4">
                            <div class="Services-box" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="250" 
                            data-aos-easing="linear">
                                <div>
                                    <img src="{{ asset($service->photo) }}" alt="imag-chat"
                                        class="features-image Services-image-card" />
                                    <h3 class="Services-card-h3">{{ $service->description }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- subscribe now --}}
            <div class="oval-img-div" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="450" 
            data-aos-easing="linear">
                <div class="container">
                    <div class="row container-Subscribe">
                        <div class="col-md-9 d-flex align-items-center">
                            <h3 class="container-Subscribe-h3">
                                {{ __('You can try send bulk messages by registration for
                                                                                            FREE') }}
                            </h3>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ url('/pricing') }}" class="Subscribe-btn btn">{{ __('Subscribe Now') }}</a>
                        </div>
                    </div>
                </div>
                <div class="oval-img">
                    <img src="{{ asset('frontend/assets') }}/images/Oval.png" />
                </div>
                <div class="oval-img-left">
                    <img src="{{ asset('frontend/assets') }}/images/Oval-two.png" />
                </div>
            </div>
            {{-- instructions --}}
            <div class="container" data-aos="fade-up" data-aos-duration="500" data-aos-delay="550" 
            data-aos-easing="linear">
                <div class="How_to_work_section" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150" 
                data-aos-easing="linear">
                    <h2 class="How_to_work_section_h2">{{ __('How to work on the services') }}</h2>
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
            <!-- ################################## planing ############################################### -->
            <section class="planing mt-5 mb-5" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150" 
            data-aos-easing="linear">
                <div class="container">
                    <div class="row">
                        <div class="planing-header text-center">
                            <div class="planing-title">
                                <h2 data-aos="zoom-in" data-aos-duration="500" data-aos-delay="100" 
                                data-aos-easing="linear">{{ __('Pricing Plans Title') }}</h2>
                                <p data-aos="zoom-in" data-aos-duration="500" data-aos-delay="250" 
                                data-aos-easing="linear">{{ __('Pricing Plans Description') }}</p>
                                <span data-aos="zoom-in" data-aos-duration="500" data-aos-delay="350" 
                                data-aos-easing="linear">{{ __('(No extra fees, cancel anytime).') }}</span>
                            </div>

                            <ul class="nav m-auto">
                                <li class="nav-item">
                                    <a id="yearly" class="nav-link plan-link active-plan"
                                        href="#">{{ __('yearly') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a id="monthly" class="nav-link plan-link" href="#">{{ __('Monthly') }}</a>
                                </li>
                            </ul>
                        </div>
                        @include('frontend.pricings')
                    </div>
                </div>
            </section>
            {{-- features --}}
            <div class="container service-container" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150" 
            data-aos-easing="linear">
                <h2 class="How_to_work_section_h2-caro ">{{ __('Browse other services of AVSENDER') }}</h2>

                <div class="faq__content_container" id="box-home">
                    <div class="container">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($features as $feat)
                                    <div class="swiper-slide">
                                        <div class="Features-box">
                                            <img src="{{ asset($feat->preview->value ?? '') }}" alt="imag-chat"
                                                class="features-image" />
                                            <a href="{{ url('feature/' . $feat->slug) }}">
                                                <h3 class="Features-box_h3">{{ Str::limit($feat->title, 20) }}</h3>
                                            </a>
                                            <p class="Features-box-p">{{ Str::limit($feat->excerpt->value ?? '', 100) }}.
                                            </p>
                                            <a href="{{ url('feature/' . $feat->slug) }}"
                                                class="Read_More">{{ __('READ MORE') }}
                                                <img src="{{ asset('frontend/assets/images/home') }}/ei_arrow-up.svg"
                                                    class="mx-1" alt="arrow-up" /></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-div">
                                <div class="btn-swiper-button-next">
                                    <img src="{{ asset('frontend/assets/images/features') }}/next.svg" alt="nex" />
                                </div>
                                <div class="btn-swiper-button-prev"> <img
                                        src="{{ asset('frontend/assets/images/features') }}/prev.svg" alt="nex" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection


@section('script')
    <script src="{{ asset('frontend/assets/js/planing.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend/assets/js/service.js') }}"></script>
@endsection
