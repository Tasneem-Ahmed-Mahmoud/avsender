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
                    <a href="{{ url()->previous()}}" class="Back-arrow">
                        <img src="{{ asset('frontend/assets/images/payment') }}/arrow-back.svg" alt="arrow"
                            class="mx-2" />{{ __('Back') }}
                    </a>
                </div>
                <div class="step-cont">

                   <a href="{{ url('/pricing') }}">
                    <div class="step-item  active">
                        <img src="{{ asset('frontend/assets/images/payment') }}/step.svg" alt="">
                        <h5 class="step-cont-h5">{{ __('Package Selection') }}</h5>
                    </div></a>
                    <div>
                        <img src="{{ asset('frontend/assets/images/payment') }}/line1-stepper.svg" alt="">
                    </div>
                    <a href="{{ url('choose-plan/'.$plan->id) }}">
                        <div class="step-item active">

                            <img src="{{ asset('frontend/assets/images/payment') }}/Step-Numbertwo-bold.svg" alt="">
                            <h5 class="step-cont-h5">{{ __('Plan Selection') }}</h5>


                        </div>
                    </a>
                    <div>
                        <img src="{{ asset('frontend/assets/images/payment') }}/linear-two.svg" alt="">
                    </div>
                    <a href="{{ url('/register/'.$plan->id) }}">
                        <div class="step-item active">

                            <img src="{{ asset('frontend/assets/images/payment') }}/payment-num-right.svg" alt="">
                            <h5 class="step-cont-h5">{{ __('Create account') }}</h5>

                        </div>
                    </a>

                    <div><img src="{{ asset('frontend/assets/images/payment') }}/Step-Number-three-linear.svg" alt="">
                    </div>
                    <div class="step-item active">

                        <img src="{{ asset('frontend/assets/images/payment') }}/payment-num.svg" alt="">
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

                    <img src="{{ asset('frontend/assets/images/payment') }}/step-sm.svg" alt="">
                    <h5 class="step-cont-h5">{{ __('Plan Selection') }}</h5>


                </div>

                <div>
                    <img src="{{ asset('frontend/assets/images/payment') }}/line2-stepper-sm.svg" alt="">
                </div>

                <div class="step-item active">
                    <img src="{{ asset('frontend/assets/images/payment') }}/step-sm.svg" alt="">
                    <h5 class="step-cont-h5">{{ __('Create account') }}</h5>


                </div>

                <div> <img src="{{ asset('frontend/assets/images/payment') }}/line2-stepper-sm.svg" alt=""></div>
                <div class="step-item active">

                    <img src="{{ asset('frontend/assets/images/payment') }}/StepNumber-sm.svg" alt="">
                    <h5 class="step-cont-h5">{{ __('Payment') }}</h5>

                </div>



            </div>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="createAccount col-md-10">
                        <div class="row pay-row">
                            <div class="col-md-6">
                                <h2 class="pay-h2">{{ __('Choose your payment method to subscribe') }}</h2>

                                <div class="my-fatoorah-div">
                                    <img src="{{ asset('frontend/assets/images/payment') }}/choose-pay.svg"
                                        alt="choose-pay" class="my-fatoorah-radio" />
                                    <img class=" my-fatoorah"
                                        src="{{ asset('frontend/assets/images/payment') }}/choose-pay-myfatoorah.svg"
                                        alt="choose-pay" />
                                </div>


                            </div>
                            <div class="col-md-4  pay-div-white d-flex align-items-center justify-content-center">
                                <div class="col-12 ">
                                    <div class=" home-img-div">
                                        <div>
                                            <img alt="home-img"
                                                src="{{ asset('frontend/assets/images/payment') }}/home-img.svg"
                                                class="home-img" />
                                        </div>
                                        <div class="mx-3">
                                            <p class="mb-0">{{ $plan->business_size }}</p>
                                            <h2 class="Enterprise">{{ $plan->title }}</h2>
                                        </div>
                                    </div>

                                    <p class="Monthly_Plan">{{ $plan->days == 30 ?__('Monthly Plan'):__('Yearly Plan') }} </p>
                                    <div>
                                        <img src="{{ asset('frontend/assets/images/payment') }}/linear-month.svg"
                                            alt="linear-month" class="linear-month" />
                                    </div>




                                    <p><span class="monthly-sar">SAR {{ $plan->price }}</span> /{{ $plan->days == 30 ?
                                        __('Monthly') : __('Yearly') }}</p>

                                    <p class="Billing_every ">{{ $plan->days == 30 ? __('Billing every Month') : __('Billing every Year') }}
                                    </p>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <form action="{{ route('proceed-payment') }}" method="POST">
                                    @csrf
                                    <input type="text" hidden name="plan_id" value="{{ $plan->id }}">
                                    <button type="submit" class="Create_Account_btn btn col-12 Proceed">
                                     {{ __('Proceed') }}
                                    </button>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>



        </div>
    </div>
</section>

@endsection
