@extends('frontend.inc.master')

@section('content')

@include('frontend.inc.head',['title' => __('Contact us'),'description' => __('Contact us Description')])
<section class="contact">
   <div class="container">
      <div class="row justify-content-between">
         <header class="contact__header col-12">
            <h2>{{ __('Have a ideas ? let’s Work Together') }}</h2>
         </header>
         <div class="col-md-6">
            <div class="ontact__content">
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
                  <div class="form-group">
                     <label for="exampleInputEmail1" class="label"> {{__('Email Address')}}</label>
                     <input type="email" class="form-control input" id="exampleInputEmail1" aria-describedby="emailHelp"
                        value="{{ old('email')??'' }}" name="email">
                     @include("frontend.inc.error", ['properity' => "email"])
                  </div>
                  <div class="form-group">
                     <label for="exampleFormControlInput1" class="label"> {{__('Name')}}</label>
                     <input type="text" class="form-control input" id="exampleFormControlInput1"
                        value="{{ old('name')??'' }}" name="name">
                     @include("frontend.inc.error", ['properity' => "name"])
                  </div>
                  <div class="form-group">
                     <label for="exampleFormControlInput1" class="label"> {{__('Subject')}}</label>
                     <input type="text" class="form-control input" id="exampleFormControlInput1"
                        value="{{ old('subject')??'' }}" name="subject">
                     @include("frontend.inc.error", ['properity' => "subject"])
                  </div>
                  <div class="form-group">
                     <label for="exampleFormControlInput1" class="label"> {{__('Phone')}}</label>
                     <input type="text" class="form-control input" id="exampleFormControlInput1"
                        value="{{ old('phone')??'' }}" name="phone">
                     @include("frontend.inc.error", ['properity' => "phone"])
                  </div>

                  <div class="form-group">
                     <label for="exampleFormControlTextarea1" class="label"> {{__('Describe your idea')}}</label>
                     <textarea class="form-control input" id="exampleFormControlTextarea1" rows="3"
                        name="message">{{ old('message')??'' }}</textarea>
                  </div>
                  <button type="submit" class="btn contact__btn"> {{ __('Send Message') }}</button>
               </form>
            </div>
         </div>

         <div class="col-md-4">
            <div class="contact__content">
               <div class="contact__top">
                  <ul class="d-flex flex-column">

                     <li class="d-flex aligen-items-center"><a
                           href="maito:{{ get_option('primary_data',true)->contact_email ?? '' }}"
                           class="d-flex  gap-3   "> <i class="fa-solid fa-paper-plane "></i> <span>{{
                              get_option('primary_data',true)->contact_email ??'info@avnology.com' }}</span></a></li>
                     <li class="d-flex aligen-items-center"><a
                           href="tel:{{ get_option('primary_data',true)->contact_phone ?? '' }}"
                           class="d-flex  gap-3    "> <i class="fa-solid fa-phone"></i> <span> {{
                              get_option('primary_data',true)->contact_phone ?? '' }}</span></a></li>
                     <li class="d-flex aligen-items-center"><a href="" class="d-flex  gap-3    "><i
                              class="fa-solid fa-location-dot"></i> <span>{{
                              get_option('primary_data',true)->address ?? '' }}</span></a></li>

                  </ul>
               </div>

               <div class="contact__bottom">
                  <figure>
                     <img src="{{ asset('frontend/assets/images/contact') }}/maps.svg" alt="maps" class="w-100" />
                  </figure>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection


