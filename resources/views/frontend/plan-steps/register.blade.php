

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
                        <img src="{{ asset('frontend/assets/images/payment') }}/arrow-back.svg" alt="arrow" class="mx-2" />{{ _('Back') }}
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
                    <a href="./plan.html">
                        <div class="step-item active">

                            <img src="{{ asset('frontend/assets/images/payment') }}/Step-Numbertwo-bold.svg" alt="">
                            <h5 class="step-cont-h5">{{ __('Plan Selection') }}</h5>


                        </div>
                    </a>
                    <div>
                        <img src="{{ asset('frontend/assets/images/payment') }}/linear-two.svg" alt=""></div>
                    <div class="step-item active">

                        <img src="{{ asset('frontend/assets/images/payment') }}/Step-Number-three.svg" alt="">
                        <h5 class="step-cont-h5">{{ __('Create account') }}</h5>

                    </div>
                    <div><img src="{{ asset('frontend/assets/images/payment') }}/Step-Number-three-linear.svg" alt=""></div>
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
                <a href="./plan.html">
                    <div class="step-item  active">

                        <img src="{{ asset('frontend/assets/images/payment') }}/step-sm.svg" alt="">
                        <h5 class="step-cont-h5">{{ __('Plan Selection') }}</h5>


                    </div>
                </a>
                <div>
                    <img src="{{ asset('frontend/assets/images/payment') }}/line2-stepper-sm.svg" alt=""></div>
                <div class="step-item active">

                    <img src="{{ asset('frontend/assets/images/payment') }}/Step-Number-3.svg" alt="">
                    <h5 class="step-cont-h5">{{ __('Create account') }}</h5>

                </div>
                <div> <img src="{{ asset('frontend/assets/images/payment') }}/line2-stepper-sm.svg" alt=""></div>
                <div class="step-item ">

                    <img src="{{ asset('frontend/assets/images/payment') }}/Step-Number-4.svg" alt="">
                    <h5 class="step-cont-h5">{{ __('Payment') }}</h5>

                </div>



            </div>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="createAccount col-md-7">
                        <h2 class="createAccount-h2">{{ __('Register your Account') }}</h2>

                        <form method="POST" action="{{ url('register-plan',$plan->id) }}">
                            @csrf
                          

                            <div class="row d-flex justify-content-between">
                                <label class="lable-name">
                                    <img src="{{ asset('frontend/assets/images/register') }}/fi-rr-user.svg" alt="user" class="mx-1 img-icon" />{{ __('Name') }}
                                </label>
                                <div class="col-6 col-sm-6">
                                    <input type="text" name="fname" class="col-6 inputs-create form-control"
                                        placeholder="{{ __('First name') }}" value="{{ old('fname')??'' }}"  />
                                        @include('frontend.inc.error', ["properity"=> 'fname'])
                                </div>
                                <div class="col-6 col-sm-6">
                                    <input type="text" name="lname" class="col-6 inputs-create form-control"
                                        placeholder="{{ __('Last name') }}" value="{{ old('lname')??'' }}" />
                                        @include('frontend.inc.error', ["properity"=> 'lname'])
                                </div>
                                <label class="lable-name">
                                    <img src="{{ asset('frontend/assets/images/register') }}/email-aicon.svg" alt="user" class="mx-1 img-icon" />{{ __("Email") }}
                                </label>


                                <div class="col-12 ">
                                    <input type="email" name="email" class="col-12 inputs-create form-control"
                                        placeholder="example@email.com" value="{{ old('email')??'' }}" />
                                        @include('frontend.inc.error', ["properity"=> 'email'])
                                </div>

                                <label class="lable-name">
                                    <img src="{{ asset('frontend/assets/images/register') }}/pass-icon.svg" alt="user" class="mx-1 img-icon" />{{ __("Password") }}
                                </label>


                                <div class="col-12 ">
                                    <input type="Password" name="password" class="col-12 inputs-create form-control"
                                        placeholder="********** "  value="{{ old('Password') ??''}}"/>
                                        @include('frontend.inc.error', ["properity"=> 'password'])

                                </div>
                                <label class="lable-name">
                                    <img src="{{ asset('frontend/assets/images/register') }}/pass-icon.svg" alt="user" class="mx-1 img-icon" />
                                   

                                    {{ __("Re-enter Password") }}
                                </label>


                                <div class="col-12 ">
                                    <input type="Password" name="password_confirmation" class="col-12 inputs-create form-control"
                                        placeholder="********** " value="{{ old('Password') ??''}}"/>

                                </div>
                                <div class="d-flex checkbox-div">
                                    <!-- <input type="Password" name="Password"  class="col-12 inputs-create form-control" placeholder="********** "/> -->
                                    <input type="checkbox" class=" checkbox mx-1 " /> <span>{{ __('Remember me') }}</span>
                                </div>

                                <a href="./Payment.html">
                                    <button type="submit" class="Create_Account_btn btn col-12">
                                       {{__("Create account")}}
                                    </button>
                                </a>
                                <div class="Login-div">{{ __('Already have an account') }} <a href="{{ url('/login') }}" class="Login-a">
                                        {{ __('Login') }}
                                    </a></div>

                            </div>



                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>
@endsection