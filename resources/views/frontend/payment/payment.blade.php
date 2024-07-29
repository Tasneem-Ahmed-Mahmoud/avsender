@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/') }}/css/plan.css">
<link rel="stylesheet" href="{{ asset('frontend/assets/') }}/css/createAccount.css">


@endsection
@section('content')
<section class="plan">
    <div class="faq_hero_container_section">
        <div class="container">
            <!-- <div class="stepper">

            <div class="step completed">
                 <img src="{{ asset('frontend/assets/images/payment') }}/step.svg" alt="">
                <div class="label label-active">Package Selection</div>
            </div>


            <div class="step active">
                <img src="{{ asset('frontend/assets/images/payment') }}/step2.svg" alt="">

                <div class="label label-active">Plan Selection</div>
            </div>

            <div class="step disabled">
                <img src="{{ asset('frontend/assets/images/payment') }}/step3.svg" alt="">

                <div class="label">Create account</div>
            </div>

            <div class="step disabled">
                <img src="{{ asset('frontend/assets/images/payment') }}/step4.svg" alt="">

                <div class="label">Payment</div>
            </div>
        </div> -->
            <div class="d-flex justify-content-center align-items-center">
                <div class="Back-arrow">
                    <a href="./createAccount.html" class="Back-arrow">
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
                    <a href="./plan.html">
                        <div class="step-item active">

                            <img src="{{ asset('frontend/assets/images/payment') }}/Step-Numbertwo-bold.svg" alt="">
                            <h5 class="step-cont-h5">Plan Selection</h5>


                        </div>
                    </a>
                    <div>
                        <img src="{{ asset('frontend/assets/images/payment') }}/linear-two.svg" alt="">
                    </div>
                    <a href="./createAccount.html">
                        <div class="step-item active">

                            <img src="{{ asset('frontend/assets/images/payment') }}/payment-num-right.svg" alt="">
                            <h5 class="step-cont-h5">Create account</h5>

                        </div>
                    </a>

                    <div><img src="{{ asset('frontend/assets/images/payment') }}/Step-Number-three-linear.svg" alt=""></div>
                    <div class="step-item active">

                        <img src="{{ asset('frontend/assets/images/payment') }}/payment-num.svg" alt="">
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
                <a href="./plan.html">
                    <div class="step-item  active">

                        <img src="{{ asset('frontend/assets/images/payment') }}/step-sm.svg" alt="">
                        <h5 class="step-cont-h5">Plan Selection</h5>


                    </div>
                </a>
                <div>
                    <img src="{{ asset('frontend/assets/images/payment') }}/line2-stepper-sm.svg" alt="">
                </div>
                <a href="./createAccount.html">
                    <div class="step-item active">

                        <img src="{{ asset('frontend/assets/images/payment') }}/step-sm.svg" alt="">
                        <h5 class="step-cont-h5">Create account</h5>

                    </div>
                </a>
                <div> <img src="{{ asset('frontend/assets/images/payment') }}/line2-stepper-sm.svg" alt=""></div>
                <div class="step-item active">

                    <img src="{{ asset('frontend/assets/images/payment') }}/StepNumber-sm.svg" alt="">
                    <h5 class="step-cont-h5">Payment </h5>

                </div>



            </div>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="createAccount col-md-10">
                        <div class="row pay-row">
                            <div class="col-md-6">
                                <h2 class="pay-h2">Choose your payment method to subscribe :</h2>

                                <div class="my-fatoorah-div">
                                    <img src="{{ asset('frontend/assets/images/payment') }}/choose-pay.svg" alt="choose-pay" class="my-fatoorah-radio" />
                                    <img class=" my-fatoorah" src="{{ asset('frontend/assets/images/payment') }}/choose-pay-myfatoorah.svg"
                                        alt="choose-pay" />
                                </div>


                            </div>
                            <div class="col-md-4  pay-div-white d-flex align-items-center justify-content-center">
                                <div class="col-12 ">
                                    <div class=" home-img-div">
                                        <div>
                                            <img alt="home-img" src="{{ asset('frontend/assets/images/payment') }}/home-img.svg" class="home-img" />
                                        </div>
                                        <div class="mx-3">
                                            <p class="mb-0">Big companies plan</p>
                                            <h2 class="Enterprise">Enterprise</h2>
                                        </div>
                                    </div>

                                    <p class="Monthly_Plan">Monthly Plan</p>
                                    <div>
                                        <img src="{{ asset('frontend/assets/images/payment') }}/linear-month.svg" alt="linear-month"
                                            class="linear-month" />
                                    </div>




                                    <p><span class="monthly-sar">SAR 25</span> /monthly</p>

                                    <p class="Billing_every ">Billing every month </p>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <a href="#">
                                    <button type="submit" class="Create_Account_btn btn col-12 Proceed">
                                        Proceed
                                    </button>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>



        </div>
    </div>
</section>
    
@endsection