@extends('frontend.inc.master')
@section('style')

@section('content')

<!-- Meta data for SEO -->
@section('meta_title', __('Login to Your Account'))
@section('meta_description', __('Login to your account on Avnology Sender for access to exclusive features.'))
@section('meta_keywords', __('login, account, secure login, user authentication,whatsapp,api,server,app,bulk'))



<div class="faq_hero_container_section" style="height: 100%;">
   <div class="container pb-5">
      <div class="row">
         <div class="col-md-6">

            <img class="login-img" style="max-width: 100%;"
               src="{{ asset('frontend/assets') }}/images/auth/loginImg.svg" alt="login" />
            <img class="login-img-sm" style="max-width: 100%;"
               src="{{ asset('frontend/assets') }}/images/auth/loginImg-sm.svg" alt="login" />
         </div>
         <div class="col-md-6">
            <div class="login-container">
               <h1>{{ __("Let's Login to your account") }}</h1>
               <form class="login-form" method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="input-group email">
                     <img class="reset-icon" src="{{ asset('frontend/assets') }}/images/auth/mailIcon.svg"
                        alt="reset"><label for="email">{{ __('Email Address') }}</label>
                     <input type="email" id="email" placeholder="example@email.com" required name="email">
                     @error('email')
                     <small class="text-danger">{{ $message }}</small>

                     @enderror
                  </div>

                  <div class="input-group password">
                     <img class="reset-icon" src="{{ asset('frontend/assets') }}/images/auth/resetPass.svg" alt="reset">
                     <label for="password">{{ __('Password') }}</label>
                     <input type="password" id="password" placeholder="********" required name="password">
                     @error('password')
                     <small class="text-danger">{{ $message }}</small>

                     @enderror

                  </div>
                  <!-- <div class="d-flex justify-content-between"> -->

                  <p style="text-align: right;"> <img src="{{ asset('frontend/assets') }}/images/auth/i.svg" alt="i"> <a
                        class="forgetPass-a" href="{{ route('password.request') }}">{{ __('Forgot password?') }}</a></p>


                  <div class="remember-me">
                     <input type="checkbox" id="remember-me">
                     <label for="remember-me">{{ __('Remember me') }}</label>
                  </div>

                  <!-- </div> -->


                  <button type="submit" class="login-button">{{ __('Sign In') }}</button>
               </form>
               <p class="signup-link">{{ __('Dont have an account?') }} <a href="{{  url('/pricing') }} ">{{ __('Sign up now') }}</a></p>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection