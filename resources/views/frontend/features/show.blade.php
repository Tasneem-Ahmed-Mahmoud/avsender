@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/planing.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/services.css') }}">
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
    
    {{-- <section class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 wrapper-content">
                    <h2>{{ $feature->title }}</h2>
                    <p>{{ $feature->longDescription->value ?? '' }}</p>
                </div>
            </div>
        </div>
    </section> --}}

    <div class="content_container_cards pt-5 pb-5">
        <div class="container">
            <div class="row mt-2">
                {{-- services --}}
                @foreach ($feature->featureServices as $service)
                    <div class="col-lg-4 col-6 mt-4">
                        <div class="Services-box">
                            <div>
                                <img src="./images/Bulk-message-card1.svg" alt="imag-chat" class="features-image Services-image-card" />
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
                            <img src="./images/Bulk-message-screen4.svg" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@include('frontend.pricings')
@endsection
