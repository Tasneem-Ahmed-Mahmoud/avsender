@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/planing.css') }}">
<style>
      .hero{
            background-image: url('{{ asset('frontend/assets/images/chatbot-background.svg') }}');
      }
      [data-plan-type] {
  display: none;
  opacity: 0;
  transition: opacity 0.5s ease-in-out;
}

[data-plan-type].visible {
  display: block;
  opacity: 1;
}

</style>
@endsection
@section('content')

@include('frontend.inc.head',[   "title"=>"Auto Responder \ WhatsApp Chatbot","description"=>"If you are looking for how to set auto-reply in WhatsApp business and WhatsApp auto-reply message sample, you are at the right place. In this post, we’ll help you understand the nitty-gritty of WhatsApp Chatbots. To start off with, let’s talk about how auto-response for WhatsApp works."])
      @include('frontend.pricings')
     
@endsection