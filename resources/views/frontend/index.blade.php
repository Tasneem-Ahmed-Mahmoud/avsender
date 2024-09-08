@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection
@section('content')

@include('frontend.inc.head-1')

<section class="features ">
    <div>
        <header class="features__header container">
            <h2 data-text="{{ __('Feature Title') }}">{{ __('Feature Title') }}</h2>
            <p>{{ __('Feature Description') }}</p>
        </header>
        @include('frontend.sections.features')
    </div>
</section>

<section class="chatbot">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-7">
                <div class="chatbot__content">
                    <h2 class="title-layer" data-text="{{ __('WhatsApp Chatbot Title Layer') }}">
                        {{ __('WhatsApp Chatbot Title') }}</h2>
                    <div class="chatbot__img-container-phone">
                        <figure class="chatbot-top-img">
                            <img src="{{ asset('frontend/assets/images/home') }}/chatbot-top.svg" alt="chatbot-top" />
                        </figure>
                        <figure class="chatbot-bottom-img">
                            <img src="{{ asset('frontend/assets/images/home') }}/chatbot-botom.svg" alt="chatbot-botom" />
                        </figure>
                    </div>
                    <p>{{ __('WhatsApp Chatbot Description') }}</p>
                    <a href="{{ url('feature/auto-responder-bot') }}" class="btn blue-btn">
                        {{ __('Lets Create WhatsApp Bot') }}</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="chatbot__img-container-desktop">
                    <figure class="chatbot-top-img">
                        <img src="{{ asset('frontend/assets/images/home') }}/chatbot-top.svg" alt="chatbot-top" />
                    </figure>
                    <figure class="chatbot-bottom-img">
                        <img src="{{ asset('frontend/assets/images/home') }}/chatbot-botom.svg" alt="chatbot-botom" />
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="av-sender">
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
                        <h3>{{__('AVSender for the WhatsApp ultimate marketing tool !')}}</h3>
                        <p>{{ __('AVSender for the WhatsApp ultimate marketing tool Desc') }}</p>
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

<section class="top-integration">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="top-integration__content">
                    <div class="top-integration__title-container">
                        <h3 class="top-integration__title" data-text="{{ __('Our Top Integrations') }}">
                            {{ __('Our Top Integrations') }}
                        </h3>
                    </div>
                    <p>{{__('Our Top Integrations Description')}}</p>
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
<section class="planing ">
    <div class="container">
        <div class="row">
            <div class="planing-header text-center">
                <div class="planing-title">
                    <h2>{{ __('Pricing Plans Title') }}</h2>
                    <p>{{ __('Pricing Plans Description') }}</p>
                    <span>{{ __("(No extra fees, cancel anytime).") }}</span>
                </div>
                <ul class="nav m-auto">
                    <li class="nav-item">
                        <a id="yearly" class="nav-link plan-link active-plan" href="#">{{ __('yearly') }}</a>
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

@include('frontend.sections.faq', ['faqs' => $faqs])

@endsection

@section('script')
<script src="{{ asset('frontend/assets/js/faq.js') }}"></script>
<script src="{{ asset('frontend/assets/js/planing.js') }}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('frontend/assets/js/service.js') }}"></script>
@endsection
