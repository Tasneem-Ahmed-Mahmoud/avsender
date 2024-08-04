@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/') }}/css/plan.css">
<link rel="stylesheet" href="{{ asset('frontend/assets/') }}/css/register.css">


@endsection
@section('content')

<section class="plan">
    <div class="faq_hero_container_section">
        <div class="container">
       

            
            <div class="d-flex justify-content-center align-items-center">
                <div class="Back-arrow">
                    <a  href="{{ url()->previous()}}" class="Back-arrow">
                        <img src="{{ asset('frontend/assets/images/payment') }}/arrow-back.svg" alt="arrow" class="mx-2" />Back
                    </a>
                </div>
                <div class="step-cont">
                    <div class="step-item  active">
                        <img src="{{ asset('frontend/assets/images/payment') }}/step.svg" alt="">
                        <h5 class="step-cont-h5">Package Selection</h5>
                    </div>
                    <div>
                        <img src="{{ asset('frontend/assets/images/payment') }}/line1-stepper.svg" alt="">
                    </div>
                    <div class="step-item active">

                        <img src="{{ asset('frontend/assets/images/payment') }}/step2.svg" alt="">
                        <h5 class="step-cont-h5">Plan Selection</h5>


                    </div>
                    <div>
                        <img src="{{ asset('frontend/assets/images/payment') }}/line2-stepper.svg" alt=""></div>
                    <div class="step-item">

                        <img src="{{ asset('frontend/assets/images/payment') }}/step3.svg" alt="">
                        <h5 class="step-cont-h5">Create account</h5>

                    </div>
                    <div><img src="{{ asset('frontend/assets/images/payment') }}/line3-stepper.svg" alt=""></div>
                    <div class="step-item">

                        <img src="{{ asset('frontend/assets/images/payment') }}/step4.svg" alt="">
                        <h5 class="step-cont-h5">Payment </h5>

                    </div>



                </div>
            </div>
            <div class="step-cont-sm">
                <div class="step-item  active">
                    <img src="{{ asset('frontend/assets/images/payment') }}/step-sm.svg" alt="">
                    <h5 class="step-cont-h5">Package Selection</h5>
                </div>
                <div>
                    <img src="{{ asset('frontend/assets/images/payment') }}/line1-stepper-sm.svg" alt="">
                </div>
                <div class="step-item  active">

                    <img src="{{ asset('frontend/assets/images/payment') }}/step2-sm.svg" alt="">
                    <h5 class="step-cont-h5">Plan Selection</h5>


                </div>
                <div>
                    <img src="{{ asset('frontend/assets/images/payment') }}/line2-stepper-sm.svg" alt=""></div>
                <div class="step-item">

                    <img src="{{ asset('frontend/assets/images/payment') }}/step3-sm.svg" alt="">
                    <h5 class="step-cont-h5">Create account</h5>

                </div>
                <div><img src="{{ asset('frontend/assets/images/payment') }}/line3-stepper-sm.svg" alt=""></div>
                <div class="step-item">

                    <img src="{{ asset('frontend/assets/images/payment') }}/step4-sm.svg" alt="">
                    <h5 class="step-cont-h5">Payment </h5>

                </div>



            </div>


    
  


            <div class="planCards mt-4">
                <div class="row">
                    @foreach ($plans as $plan )
                    <div class="plan-card plan-card-l col-md-6 text-center">
                        <h3 class="plan-card-h3">{{ $plan->days==30 ? 'Monthly Plan' : 'Annual Plan' }}</h3>
                        <div>
                            <img class="card-line" src="{{ asset($plan->icon)}}" alt="">

                        </div>

                        <div class="plan-price d-flex justify-content-center">
                            <div class="plan-price-SAR">
                                SAR {{ $plan->price }}

                            </div>
                            <div class="plan-price-month">
                                /{{ $plan->days==30 ? 'monthly' : 'yearly' }}

                            </div>
                        </div>

                        <div class="plan-every">Billing every {{  $plan->days==30 ? 'month' : 'year' }} </div>
                        <a href="{{ url('/register',$plan->id) }}">
                            <button class="subscribe-btn"> subscribe</button>
                        </a>

                    </div>
                    @endforeach

          

                  

                </div>

            </div>
        </div>
    </div>
</section>
    
@endsection