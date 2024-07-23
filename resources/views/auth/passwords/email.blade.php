@extends('frontend.inc.master')
@section('style')

@section('content')

<div class="faq_hero_container_section" style="height: 100%;">
   <div style="padding-top: 3%;" class="container reset-container pb-5">
      <img style="max-width: 100%;" src="{{ asset('frontend/assets/images/auth') }}/forget.svg" alt="not found" />
      <div class="reset">
         <h2 class="reset-h2 mt-3">{{ __("Forget password ?") }}</h2>
         <h6 class="reset-h6 mt-3">{{ __("please enter your E-mail below") }}</h6>
         @if (session('status'))
         <div class="alert alert-success" role="alert">
            {{ session('status') }}
         </div>
         @endif
         <form class="reset-form" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="container mt-3">
               <div class="form-group">
                  <img class="reset-icon" src="{{ asset('frontend/assets/images/auth') }}/mailIcon.svg" alt="reset">
                  <label class="reset-label" for="new-password">{{ __('Email Address') }}</label>
                  <input placeholder="example@email.com" type="email" class="form-control reset-input" id="new-email"
                     name="email" value="{{ old('email') ??''}}">
                  @error('email')
                  <small class="text-danger">
                     {{ $message }}
                  </small>
                  @enderror
               </div>

               <input style="margin-top: 2rem;" class="reset-btn" type="submit"
                  value="{{ __('Send Password Reset Link') }}" />

            </div>
         </form>
      </div>
   </div>
</div>

@endsection