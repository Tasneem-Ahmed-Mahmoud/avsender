

@extends('frontend.inc.master')

@section('content')


{{-- <div class="faq_hero_container_section" style="height: 100%;">
   <div style="text-align: center;padding-top: 6%;" class="container">
     
      <img style="max-width: 100%;" src="{{ asset('frontend/assets/images/auth') }}/notfound.svg" alt="not found"/>
   </div>
   </div> --}}

   <div class="faq_hero_container_section pb-5" style="height: 100%; ">
      <div style="text-align: center;padding-top: 6%;" class="container">
         <h3 >Error @yield('code')</h3>
         <img style="max-width: 100%;" src="{{ asset('frontend/assets/images/auth') }}/notfound.svg" alt="not found"/>
      </div>
      </div>
   
@endsection




