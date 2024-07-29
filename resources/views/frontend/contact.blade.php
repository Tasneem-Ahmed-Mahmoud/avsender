{{-- @extends('frontend.layouts.main')
@section('content')
@include('frontend.layouts.header-2')
   <main>
      <!-- breadcrumb area start -->
      <div class="breadcrumb__area breadcrumb-height p-relative grey-bg"
         data-background="{{ asset('assets/frontend/img/breadcrumb/breadcrumb.jpg') }}">
         <div class="breadcrumb__scroll-bottom smooth">
            <a href="#contact">
               <i class="far fa-arrow-down"></i>
            </a>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content text-center">
                     <h3 class="breadcrumb__title">{{ __('Contact us') }}</h3>
                     <div class="breadcrumb__list">
                        <span><a href="{{ url('/') }}">{{ __('Home') }}</a></span>
                        <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                        <span>{{ __('Contact us') }}</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->

      <!-- contact area start -->
      <div class="tp-conatact-area pt-125 pb-125">
         <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 mb-30">
                  <div class="contact-info text-center">
                     <span class="contact-icon"><i class="fas fa-map-marker-alt"></i></span>
                     <h4>{{ __('Visit Us Daily') }}</h4>
                     <span>
                        <a href="{{ $contact_page->map_link ?? '' }}" target="_blank">{{ $contact_page->address ?? '' }}<br>{{ $contact_page->country ?? '' }}</a>
                     </span>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 mb-30">
                  <div class="contact-info text-center">
                     <span class="contact-icon"><i class="fas fa-phone-volume"></i></span>
                     <h4>{{ __('Contact Us') }}</h4>
                     <span>
                        <a href="tel:{{ $contact_page->contact1 ?? '' }}">{{ $contact_page->contact1 ?? '' }}<br>
                          {{ $contact_page->contact2 ?? '' }}</a>
                     </span>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 mb-30">
                  <div class="contact-info text-center">
                     <span class="contact-icon"><i class="fas fa-envelope"></i></span>
                     <h4>{{ __('Email Us') }}</h4>
                     <span><a href="mailto:{{ $contact_page->email1 ?? '' }}">{{ $contact_page->email1 ?? '' }}</a><br>
                        <a href="mailto:{{ $contact_page->email2 ?? '' }}">{{ $contact_page->email2 ?? '' }}</a></span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div id="contact" class="contact-form-box pt-60">
                     <div class="contact-form-box text-center">
                        <div class="row justify-content-center">
                           <div class="col-8">
                              <h4 class="contact-title">{{ __('Send us a Message :') }}</h4>
                           </div>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                         <ul>
                           @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                           @endforeach
                        </ul>
                       </div>
                       @endif
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
                        <form action="{{ route('send.mail') }}" method="post">
                           @csrf
                           <div class="row">
                              <div class="col-lg-6 col-md-6 col-12">
                                 <div class="tp-contact-input">
                                    <input type="text" required="" name="name" maxlength="20" placeholder="{{ __('Enter your Name') }}" class="@error('name') is-invalid @enderror">
                                 </div>                               
                              </div>
                              <div class="col-lg-6 col-md-6 col-12">
                                 <div class="tp-contact-input">
                                    <input type="email" required="" name="email" maxlength="40" placeholder="{{ __('Enter your Mail') }}" class="@error('email') is-invalid @enderror">
                                 </div>
                                 
                              </div>
                              <div class="col-lg-6 col-md-6 col-12">
                                 <div class="tp-contact-input">
                                    <input type="number" required="" name="phone" maxlength="15" placeholder="{{ __('Enter your Number') }}" class="@error('phone') is-invalid @enderror">
                                 </div>                                
                              </div>
                              <div class="col-lg-6 col-md-6 col-12">
                                 <div class="tp-contact-input">
                                    <input type="text" placeholder="{{ __('Subject') }}" maxlength="100" required="" name="subject" class="@error('subject') is-invalid @enderror">
                                 </div>                                
                              </div>
                              <div class="col-12">
                                 <div class="tp-contact-input">
                                    <textarea placeholder="{{ __('Type your Message') }}" maxlength="500" required="" name="message" class="@error('message') is-invalid @enderror"></textarea>
                                 </div>                                
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <div class="tp-submit-button">
                                    <button type="submit" class="tp-btn-blue-square"><span>{{ __('Send Message') }}</span></button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact area end -->
   </main>
@endsection --}}


@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/contact-us.css') }}">
@endsection
@section('content')
   

<div class="faq_hero_container_section">
   <div class="row ">
       <div class="col-12 hero_container hero_container-feature hero_container-feature-contact">
           <div>
               <h3 class="hero_h3">Contact</h3>
               <p class="hero_p">Subscribe now with our different plans that suits all business sizes and enjoy our
                   amazing features .</p>
               <a href="#">
                   <button class="btn btn-button-hero">Work With Us</button>
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
                   <input type="email" name="email" id="email" class="form-control form-control-contact "  value="{{ old('email')??'' }}"/>
                   @error('email')
                 
               @include("frontend.inc.error", ['message' => $message])
                     
               @enderror
                   <label for="Name" class="input_contact input_contact-p">
                     {{__('Your Name')}}
                   </label>
                   <input type="text" name="name" id="Name" class="form-control form-control-contact " value="{{ old('name')??'' }}"/>
                   @error('name')
                 
                   @include("frontend.inc.error", ['message' => $message])
                         
                   @enderror
                   <label for="subject" class="input_contact input_contact-p">
                     {{ __('Subject') }}
                   </label>
                   <input type="text" name="subject" id="subject" class="form-control form-control-contact "  value="{{ old('subject')??'' }}"/>
                   @error('subject')
                 
                   @include("frontend.inc.error", ['message' => $message])
                         
                   @enderror
                   <label for="Phone" class="input_contact input_contact-p">
                      {{__('Phone')}}
                   </label>
                   <input type="tel" name="phone" id="Phone" class="form-control form-control-contact " value="{{ old('phone')??'' }}" />
                   @error('phone')
                 
                   @include("frontend.inc.error", ['message' => $message])
                         
                   @enderror
                   <label for="Describe" class="input_contact input_contact-p">
                    {{__('Describe your idea')}}
                   </label>
              
                   <textarea
                   cols="8"
                   rows="5"
                   class="form-control "
                   name="message"
                 >{{ old('message') ?? '' }}</textarea>
               @error('message')
                 
               @include("frontend.inc.error", ['message' => $message])
                     
               @enderror
                
                   <button type="submit" class="btn btn-submit col-12">
                     {{ __('Send Message') }}
                   </button>
               </form>
           </div>
           <div class="col-md-5 maps-contact">
               <div class="info-contact">
                  <img src="{{ asset('frontend/assets/images/contact') }}/file-icons_telegram.svg" alt="file-icons_telegram"
                     class="mx-2" />{{ $contact_page->email1 ?? '' }}

                 
               </div>
               <div class="info-contact">
                 <img src="{{ asset('frontend/assets/images/contact') }}/basil_phone-solid.svg" alt="file-icons_telegram" class="mx-2" />{{ $contact_page->contact1 ?? '' }}
                 
               </div>
               <div class="info-contact  info-contact-margin">
                  <img src="{{ asset('frontend/assets/images/contact') }}/Jeddah-location.svg" alt="file-icons_telegram" class="mx-2" />{{ __('Jeddah , Saudi Arabia') }}
               </div>
               <img src="{{ asset('frontend/assets/images/contact') }}/maps.svg" alt="maps" class="maps" />
           </div>
       </div>
   </div>
</div>
@endsection