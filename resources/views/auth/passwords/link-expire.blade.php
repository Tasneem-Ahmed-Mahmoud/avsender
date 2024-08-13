@extends('frontend.inc.master')

@section('content')
<div class="faq_hero_container_section" style="height: 100%;">
    <div style="text-align: center;padding-top: 9%;" class="container pb-5">
       <img style="max-width: 100%;" src="{{ asset('images/linkExpired.svg') }}" alt="Link expired"/>
       <h3 class="linkExpired-h3">Link Expired!</h3>
       <button class="linkExpired-btn" onclick="window.location.reload();">Reload page</button>
       <img src="{{ asset('images/reload.svg') }}" alt="Reload"/>
    </div>
</div>
@endsection
