
 
@extends('frontend.inc.master')


@section('content')

<div class="faq_hero_container_section" style="height: 100%;">
   <div style="padding-top: 3%;" class="container reset-container">
      <img style="max-width: 100%;" src="{{ asset('frontend/assets/images/auth') }}/reset.svg" alt="not found"/>
      <div class="reset">
           <h2 style="text-align: center;" class="reset-h2 mt-3">{{ __('Reset Password') }}</h2>
           <form class="reset-form" method="POST" action="{{ route('password.update') }}">
            @csrf
            {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
               <div class="container mt-3">
                   <div class="row">
                     
                       <div class="form-group col-12">
                           <img class="reset-icon" src="{{ asset('frontend/assets/images/auth') }}/resetPass.svg" alt="reset">  <label class="reset-label" for="new-password">{{ __('Password') }}</label>
                         <input type="password" class="form-control reset-input" id="new-password" name="new-password" name="password">
                         @error('password')
                      <small class="text-danger" >  
                           {{ $message }}
                        </small>                          
                         @enderror
                       </div>
                       <div class="form-group col-12">
                           <img  class="reset-icon"  src="{{ asset('frontend/assets/images/auth') }}/resetPass.svg" alt="reset">  <label class="reset-label" for="reenter-new-password">{{ __('Confirm Password') }}</label>
                         <input type="password" class="form-control reset-input" id="reenter-new-password" name="reenter-new-password" name="password_confirmation">
                         @error('password')
                         <small class="text-danger" >  
                              {{ $message }}
                           </small>                          
                            @enderror
                        </div>
                   </div>
                   
                 <input class="reset-btn" type="submit" value="{{ __('Reset Password') }}"/>

                 </div>
           </form>
      </div>

      
   </div>
   </div>

@endsection