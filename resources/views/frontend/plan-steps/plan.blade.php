@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/') }}/css/plan.css">
<link rel="stylesheet" href="{{ asset('frontend/assets/') }}/css/register.css">
@endsection
@section('content')
<section class="plan" data-aos="fade-up" data-aos-duration="600" data-aos-delay="450" 
         data-aos-easing="linear">
    <div class="faq_hero_container_section">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="Back-arrow">
                    <a  href="{{ url()->previous()}}" class="Back-arrow">
                        <img src="{{ asset('frontend/assets/images/payment') }}/arrow-back.svg" alt="arrow" class="mx-2" />{{ __('Back') }}
                    </a>
                </div>
                <div class="step-cont">
                    <div class="step-item  active">
                        <img src="{{ asset('frontend/assets/images/payment') }}/step.svg" alt="">
                        <h5 class="step-cont-h5">{{ __('Package Selection') }}</h5>
                    </div>
                    <div>
                        <img src="{{ asset('frontend/assets/images/payment') }}/line1-stepper.svg" alt="">
                    </div>
                    <div class="step-item active">

                        <img src="{{ asset('frontend/assets/images/payment') }}/step2.svg" alt="">
                        <h5 class="step-cont-h5">{{ __('Plan Selection') }}</h5>


                    </div>
                    <div>
                        <img src="{{ asset('frontend/assets/images/payment') }}/line2-stepper.svg" alt=""></div>
                    <div class="step-item">

                        <img src="{{ asset('frontend/assets/images/payment') }}/step3.svg" alt="">
                        <h5 class="step-cont-h5">{{ __('Create account') }}</h5>

                    </div>
                    <div><img src="{{ asset('frontend/assets/images/payment') }}/line3-stepper.svg" alt=""></div>
                    <div class="step-item">

                        <img src="{{ asset('frontend/assets/images/payment') }}/step4.svg" alt="">
                        <h5 class="step-cont-h5">{{ __('Payment') }}</h5>

                    </div>



                </div>
            </div>
            <div class="step-cont-sm">
                <div class="step-item  active">
                    <img src="{{ asset('frontend/assets/images/payment') }}/step-sm.svg" alt="">
                    <h5 class="step-cont-h5">{{ __('Package Selection') }}</h5>
                </div>
                <div>
                    <img src="{{ asset('frontend/assets/images/payment') }}/line1-stepper-sm.svg" alt="">
                </div>
                <div class="step-item  active">

                    <img src="{{ asset('frontend/assets/images/payment') }}/step2-sm.svg" alt="">
                    <h5 class="step-cont-h5">{{ __('Plan Selection') }}</h5>


                </div>
                <div>
                    <img src="{{ asset('frontend/assets/images/payment') }}/line2-stepper-sm.svg" alt=""></div>
                <div class="step-item">

                    <img src="{{ asset('frontend/assets/images/payment') }}/step3-sm.svg" alt="">
                    <h5 class="step-cont-h5">{{ __('Create account') }}</h5>

                </div>
                <div><img src="{{ asset('frontend/assets/images/payment') }}/line3-stepper-sm.svg" alt=""></div>
                <div class="step-item">

                    <img src="{{ asset('frontend/assets/images/payment') }}/step4-sm.svg" alt="">
                    <h5 class="step-cont-h5">{{ __('Payment') }}</h5>

                </div>



            </div>



            
            <div class="plan-center d-flex align-items-center justify-content-center">
                <div class="plan-center-left">
                    <img src="{{ asset($plans[0]->icon)}}" alt="">
                </div>
                <div class="plan-center-right mx-2">
                    <div class="plan-center-right_top">
                        {{ $plans[0]->business_size }}
                    </div>
                    <div class="plan-center-right_bottom">
                       
                        {{ $plans[0]->title}}
                    </div>
                </div>
            </div>
            <div class="planCards mt-4">
                <div class="row justify-content-between">
                   
                    @foreach ($plans as $plan )
                    <div class="plan-card  {{ $plan->days==30 ? 'plan-card-l' : 'plan-card-r' }} col-md-6 text-center">
                        @if($plan->days !=30)
                        <div class="Save_pres">
                            {{ __('Save Plan') }} 30%
                        </div>
                        @endif
                        <h3 class="plan-card-h3">{{ $plan->days==30 ?__( 'Monthly Plan') : __('Annual Plan') }}</h3>
                        <div>
                            <img class="card-line" src="{{ asset('frontend/assets/images/planing') }}/plan-card-line.svg" alt="">

                        </div>

                        <div class="plan-price d-flex justify-content-center">
                            <div class="plan-price-SAR">
                                SAR {{ $plan->price }}

                            </div>
                            <div class="plan-price-month">
                                /{{ $plan->days==30 ?__('Monthly') : __('Yearly') }}

                            </div>
                        </div>

                        <div class="plan-every">{{  $plan->days==30 ? __('Billing every Month') : __('Billing every Year')}} </div>
                        <a href="{{ url('/register',$plan->id) }}">
                            <button class="subscribe-btn"> {{ __('Subscribe') }}</button>
                        </a>

                    </div>
                    @endforeach

          

                  

                </div>

            </div>
        </div>
    </div>
</section>
    
@endsection
