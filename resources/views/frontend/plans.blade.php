@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/planing.css') }}">
<style>
      .hero{
            background-image: url('{{ asset('frontend/assets/images/chatbot-background.svg') }}');
      }
    
</style>
@endsection
@section('content')

@include('frontend.inc.head',[   "title"=>__('Pricing Plans Title'),"description"=>__('Pricing Plans Description')])
     
<!-- ################################## planing ############################################### -->
<section class="planing mt-5 mb-5">
      <div class="container">
        <div class="row">
          <div class="planing-header text-center">
            <div class="planing-title">
              
              <span>{{ __("(No extra fees, cancel anytime).") }}</span>
            </div>
    
            <ul class="nav m-auto">
                  <li class="nav-item">
                        <a id="yearly" class="nav-link plan-link active-plan" href="#">{{ __('yearly') }}</a>
                    </li>
                    <li class="nav-item">
                        <a id="monthly" class="nav-link plan-link" href="#">{{ __('Monthly') }}</a>
                    </li>
            </ul>
          </div>
          
      @include('frontend.pricings')
  
  
            </div>
          </div>
       
    </section>
     
@endsection

@section('script')
<script src="{{ asset('frontend/assets/js/planing.js') }}"></script>
      
@endsection