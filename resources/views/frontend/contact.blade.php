@extends('frontend.inc.master')

@section('content')


<div class="faq_hero_container_section">
   <div class="row ">
      <div class="col-12 hero_container hero_container-feature hero_container-feature-contact">
         <div>
            <h3 class="hero_h3">{{ __('Contact us') }}</h3>
            <p class="hero_p">{{ __('Contact us Description') }}</p>
            <a href="#">
               <a href="{{ url('/about') }}" class="btn btn-button-hero">{{ __('Work With Us') }}</a>
            </a>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row contact-us-row">
         <div class="col-md-6">
            <h2 class="contact_h2">{{ __('Have a ideas ? let’s Work Together') }}</h2>
            <form action="{{ route('send.mail') }}" method="post">

               @if(Session::has('success'))
               <div class="alert alert-success" role="alert">
                  {{ Session::get('success') }}
               </div>
               @endif
               @if(Session::has('error'))
               <div class="alert alert-danger" role="alert">
                  {{ Session::get('error') }}
               </div>
               @endif
               @csrf
               <label for="email" class="input_contact">
                  {{__('Email Address')}}
               </label>
               <input type="email" name="email" id="email" class="form-control form-control-contact "
                  value="{{ old('email')??'' }}" />

               @include("frontend.inc.error", ['properity' => "email"])

               <label for="Name" class="input_contact input_contact-p">
                  {{__('Your Name')}}
               </label>
               <input type="text" name="name" id="Name" class="form-control form-control-contact "
                  value="{{ old('name')??'' }}" />

               @include("frontend.inc.error", ['properity' =>"name"])

               <label for="subject" class="input_contact input_contact-p">
                  {{ __('Subject') }}
               </label>
               <input type="text" name="subject" id="subject" class="form-control form-control-contact "
                  value="{{ old('subject')??'' }}" />

               @include("frontend.inc.error", ['properity' => "subject"])


               <label for="Phone" class="input_contact input_contact-p">
                  {{__('Phone')}}
               </label>
               <input type="tel" name="phone" id="Phone" class="form-control form-control-contact "
                  value="{{ old('phone')??'' }}" />

               @include("frontend.inc.error", ['properity' => "phone"])


               <label for="Describe" class="input_contact input_contact-p">
                  {{__('Describe your idea')}}
               </label>

               <textarea cols="8" rows="5" class="form-control " name="message">{{ old('message') ?? '' }}</textarea>

               @include("frontend.inc.error", ['properity' => "message"])


               <button type="submit" class="btn btn-submit col-12">
                  {{ __('Send Message') }}
               </button>
            </form>
         </div>
         <div class="col-md-5 maps-contact">
            <div class="info-contact">
               <img src="{{ asset('frontend/assets/images/contact') }}/file-icons_telegram.svg"
                  alt="file-icons_telegram" class="mx-2" />{{ $contact_page->email1 ?? '' }}


            </div>
            <div class="info-contact">
               <img src="{{ asset('frontend/assets/images/contact') }}/basil_phone-solid.svg" alt="file-icons_telegram"
                  class="mx-2" />{{ $contact_page->contact1 ?? '' }}

            </div>
            <div class="info-contact  info-contact-margin">
               <img src="{{ asset('frontend/assets/images/contact') }}/Jeddah-location.svg" alt="file-icons_telegram"
                  class="mx-2" />{{ __('Jeddah , Saudi Arabia') }}
            </div>
            <img src="{{ asset('frontend/assets/images/contact') }}/maps.svg" alt="maps" class="maps " />
         </div>
      </div>
   </div>
</div>
@endsection