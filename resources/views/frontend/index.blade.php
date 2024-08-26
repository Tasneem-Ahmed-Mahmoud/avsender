@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection
@section('content')

<div class="faq_hero_container_section ">

  @include('frontend.inc.head-1')


    <div class="content_container_cards  pb-5 ">
        <div class="container">
            <div class="Our-Features-h3-text">
                <img alt="text-bg"
                    src="{{ asset('frontend/assets/images/home/' . (app()->getLocale() == 'ar' ? 'Features-bg-image-ar.svg' : 'Features-bg-image.svg')) }}" />
            </div>
            <h3 class="Our-Features-h3">{{ __('Feature Title') }}</h3>
            <p class="Our-Features-p">{{ __('Feature Description') }}</p>

            @include('frontend.sections.features')
            <div class="row  whats-app">
                <div class="col-md-7 d-flex align-items-center  whats-app-col-7">
                    <div>
                        <div class="Our-whats-h3">
                            <div class="WhatsApp-Chatbot-text">
                                <img alt="text-bg"
                                    src="{{ asset('frontend/assets/images/home') }}/WhatsApp-Chatbot.svg" />
                            </div>
                            <h3 class="Our-whats-h3">{{ __('WhatsApp Chatbot Title') }}</h3>
                        </div>

                        <p class="Our-Features-p Our-WhatsApp-p">{{ __('WhatsApp Chatbot Description') }}</p>
                        <div class="btn-center-whats">
                            <a href="{{ url('feature/auto-responder-bot') }}" class="btn btn-create-whats-app">{{
                                __('Lets Create WhatsApp Bot') }}</a>
                        </div>

                    </div>


                </div>
                <div class="col-md-4">
                    <div class="Our-whats-h3-sm d-flex justify-content-center">
                        <div>
                            <div class="WhatsApp-Chatbot-text WhatsApp-Chatbot-text-sm">
                                <img alt="text-bg"
                                    src="{{ asset('frontend/assets/images/home') }}/WhatsApp-Chatbot.svg" />
                            </div>

                            <h3 class="Our-whats-h3-sm">{{ __('WhatsApp Chatbot Title') }}</h3>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('frontend/assets/images/home') }}/whats-section.svg" alt=" whats-section "
                            class="whats-section" />

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row iPhone_2-row">
                    <div class="col-md-4 iPhone_2-col">
                        <div class="iPhone_2_div ">
                            <img src="{{ asset('frontend/assets/images/home') }}/iPhone_2.svg" alt="iPhone_2" />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div>
                            <div class="Our-iphon-h3">

                                <h3 class="Our-iphon-h3">{{__('AVSender for the WhatsApp ultimate marketing tool !')}}
                                </h3>
                            </div>

                            <p class="Our-Features-p Our-WhatsApp-p">{{ __('AVSender for the WhatsApp ultimate marketing tool Desc') }}</p>
                            <div class="btn-center-whats">
                                <a class="btn btn-create-whats-app btn-iphone" href="{{ url('pricing') }}">{{__("Start Using Avsender")}}</a>
                            </div>
                            <div class="row home-box-row">
                                <div class="col-md-6 col-sm-12 mt-4 Features-box-col-sm ChatBot-left">
                                    <img src="{{ asset('frontend/assets/images/home') }}/ChatBot-left.svg"
                                        alt="ChatBot-left" />
                                    <div class="home-box ChatBot-left-box">

                                        <h3 class="Features-box_h3 home-box-h3">{{ __('Direct activation') }}</h3>
                                        <p class="Features-box-p Features-box-p-home home-box-p">{{__('Direct activation Description')}}</p>

                                    </div>


                                </div>
                                <div class="col-md-6 col-sm-12 mt-4 Features-box-col-sm ChatBot-right">
                                    <div class="d-flex justify-content-end">
                                        <img src="{{ asset('frontend/assets/images/home') }}/ChatBot-right.svg"
                                            alt="ChatBot-left" />
                                    </div>

                                    <div class="home-box ChatBot-left-right">

                                        <h3 class="Features-box_h3 home-box-h3"> {{__('Facing any problem & can’t find solution ?')}}</h3>
                                        <p class="Features-box-p Features-box-p-home home-box-p">{{__('Facing any problem & can’t find solution Description')}}</p>

                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

          @include('frontend.sections.statistic')


            <div class="row Our_Top_Integrations-row ">

                <div class="col-md-6 ">
                    <div>
                        <div class=" Our_Top_Integrations-flex">
                            <div class="">
                                <div class="WhatsApp-Chatbot-text">
                                    <img alt="text-bg"
                                        src="{{ asset('frontend/assets/images/home/' . (app()->getLocale() == 'ar' ? 'Our_Top_Integrations_ar.svg' : 'Our_Top_Integrations.svg')) }}" />
                                </div>
                                <h3 class="Our-whats-h3">{{ __('Our Top Integrations') }} </h3>
                                <h3 class="Our-whats-h3-sm Our_Top_Integrations">{{ __('Our Top Integrations') }} </h3>
                            </div>
                        </div>
                        <p class="Our-Features-p Our-WhatsApp-p Our-Ipsum-p">{{__('Our Top Integrations Description')}}
                        </p>
                    </div>
                </div>
                <div class="col-md-6 iPhone_2-col Image-section-col">
                    <div class="Image-section ">
                        <img src="{{ asset('frontend/assets/images/home') }}/Image-section.svg" alt="iPhone_2" />
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ################################## planing ############################################### -->
    <section class="planing mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="planing-header text-center">
                    <div class="planing-title">
                        <h2>{{ __('Pricing Plans Title') }}</h2>
                        <p>{{ (__('Pricing Plans Description')) }}</p>
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



</div>
@endsection



@section('script')

<script src="{{ asset('frontend/assets/js/faq.js') }}"></script>
<script src="{{ asset('frontend/assets/js/planing.js') }}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('frontend/assets/js/service.js') }}"></script>
@endsection