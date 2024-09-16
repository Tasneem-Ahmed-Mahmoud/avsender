@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection
@section('content')

@include('frontend.inc.head-1')

<section class="features " data-aos="fade-up" data-aos-duration="600" data-aos-delay="100" 
data-aos-easing="linear">
    <div>
        <header class="features__header container">
            <h2 data-aos="zoom-in" data-aos-duration="500" data-aos-delay="100" 
            data-aos-easing="linear"  data-text="{{ __('Feature Title') }}">{{ __('Feature Title') }}</h2>
            <p data-aos="zoom-in" data-aos-duration="500" data-aos-delay="150" 
            data-aos-easing="linear">{{ __('Feature Description') }}</p>
        </header>
        @include('frontend.sections.features')
    </div>
</section>

<section class="chatbot" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100" 
data-aos-easing="linear">
    <div class="container">
        <div class="row justify-content-between align-items-center ">
            <div class="col-sm-7 ">
                <div class="chatbot__content">
                    <h2 data-aos="zoom-in" data-aos-duration="500" data-aos-delay="100" 
                    data-aos-easing="linear" class="title-layer desktop-title" data-text="{{ __('WhatsApp Chatbot Title Layer') }}">
                        {{ __('WhatsApp Chatbot Title') }}</h2>
                 
                    <p data-aos="zoom-in" data-aos-duration="500" data-aos-delay="100" 
                    data-aos-easing="linear">{{ __('WhatsApp Chatbot Description') }}</p>
                    <a href="{{ url('feature/auto-responder-bot') }}" class="btn blue-btn">
                        {{ __('Lets Create WhatsApp Bot') }}</a>
                </div>
            </div>


            <div class="col-sm-4 " >
            <h2 data-aos="zoom-in" data-aos-duration="500" data-aos-delay="100" 
            data-aos-easing="linear" class="title-layer mob-title " data-text="{{ __('WhatsApp Chatbot Title Layer') }}">
            {{ __('WhatsApp Chatbot Title') }}</h2>
                <img src="{{ asset('frontend/assets/images/home') }}/robot.svg" alt="" class="img-fluid  mob-img" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="100" 
                data-aos-easing="linear">
                <img src="{{ asset('frontend/assets/images/home') }}/robot-lg.svg" alt="" class="img-fluid  desktop-img" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="100" 
                data-aos-easing="linear" >
                
                </div>
            </div>
        </div>
    
</section>

<section class="av-sender"  data-aos="fade-up" data-aos-duration="600" data-aos-delay="100" 
data-aos-easing="linear">
    <div class="container">
        <div class="row">
            {{-- left --}}
            <div class="col-lg-4">
                <figure class="av-sender__left">
                    <img src="{{ asset('frontend/assets/images/home') }}/iPhone_2.svg" alt="iPhone_2" />
                </figure>
            </div>
            {{-- right --}}
            <div class="col-lg-8">
                <div class="av-sender__right">
                    {{-- top --}}
                    <div class="av-sender__top">
                        <h3 data-aos="zoom-in" data-aos-duration="500" data-aos-delay="100" 
                        data-aos-easing="linear">{{__('AVSender for the WhatsApp ultimate marketing tool !')}}</h3>
                        <p data-aos="zoom-in" data-aos-duration="500" data-aos-delay="150" 
                        data-aos-easing="linear">{{ __('AVSender for the WhatsApp ultimate marketing tool Desc') }}</p>
                        <a class="btn blue-btn" href="{{ url('pricing') }}">{{__("Start Using Avsender")}}</a>
                    </div>
                    {{-- bottom --}}
                    <div class="av-sender__bottom row justify-content-between">
                        <div class="col-md-6 position-relative av-sender_card_container">
                            <img src="{{ asset('frontend/assets/images/home') }}/ChatBot-left.svg" class="start" />
                            <div class="av-sender__content position-relative">
                                <div class="av-sender__card">
                                    <h3>{{ __('Direct activation') }}</h3>
                                    <p>{{__('Direct activation Description')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 position-relative av-sender_card_container">
                            <img src="{{ asset('frontend/assets/images/home') }}/ChatBot-right.svg" alt="ChatBot-left" class="end" />
                            <div class="av-sender__content position-relative">
                                <div class="av-sender__card">
                                    <h3>{{__('Facing any problem & can’t find solution ?')}}</h3>
                                    <p>{{__('Facing any problem & can’t find solution Description')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.sections.statistic')

<section class="top-integration" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100" 
data-aos-easing="linear">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="top-integration__content">
                    <div class="top-integration__title-container">
                        <h3 data-aos="zoom-in" data-aos-duration="500" data-aos-delay="100" 
                        data-aos-easing="linear" class="top-integration__title" data-text="{{ __('Our Top Integrations') }}">
                            {{ __('Our Top Integrations') }}
                        </h3>
                    </div>
                    <p data-aos="zoom-in" data-aos-duration="500" data-aos-delay="150" 
                    data-aos-easing="linear">{{__('Our Top Integrations Description')}}</p>
                </div>
            </div>
            <div class="col-md-6">
                <figure>
                    <img src="{{ asset('frontend/assets/images/home') }}/Image-section.svg" alt="iPhone_2" class="w-100" />
                </figure>
            </div>
        </div>
    </div>
</section>

<!-- ################################## planing ############################################### -->
<section class="planing " data-aos="fade-up" data-aos-duration="600" data-aos-delay="100" 
data-aos-easing="linear">
    <div class="container">
        <div class="row justify-content-center">
            <div class="planing-header text-center">
                <div class="planing-title">
                    <h2 data-aos="zoom-in" data-aos-duration="500" data-aos-delay="100" 
                    data-aos-easing="linear">{{ __('Pricing Plans Title') }}</h2>
                    <p data-aos="zoom-in" data-aos-duration="500" data-aos-delay="150" 
                    data-aos-easing="linear">{{ __('Pricing Plans Description') }}</p>
                    {{-- <span>{{ __("(No extra fees, cancel anytime).") }}</span> --}}
                </div>
                {{-- <ul class="nav m-auto">
                    <li class="nav-item">
                        <a id="yearly" class="nav-link plan-link active-plan" href="#">{{ __('yearly') }}</a>
                    </li>
                    <li class="nav-item">
                        <a id="monthly" class="nav-link plan-link" href="#">{{ __('Monthly') }}</a>
                    </li>
                </ul> --}}
            </div>
            @include('frontend.pricings')
        </div>
    </div>
</section>

@include('frontend.sections.faq', ['faqs' => $faqs])

@endsection

@section('script')
<script src="{{ asset('frontend/assets/js/faq.js') }}"></script>
<script src="{{ asset('frontend/assets/js/planing.js') }}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('frontend/assets/js/service.js') }}"></script>
@endsection
