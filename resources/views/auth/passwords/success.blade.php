@extends('frontend.inc.master')

@section('content')




    <div class="faq_hero_container_section " style="height: 100%;">
        <div style="text-align: center;padding-top: 10%;" class="container pb-5">
           <img style="max-width: 100%;" src="{{ asset('frontend/assets') }}/images/success.svg" alt="not found"/>
           <div class="success">
              <button  class="successPage-btn success-solid mx-2 mb-3">  <a class="text-white" href="{{ url('/login') }}">Login</a></button>
              <button  class="successPage-btn success-NoNsolid mx-2">  <a class="text-color" href="{{ url('/') }}" >Home page</a></button>
           </div>
        </div>
        </div>


@endsection
