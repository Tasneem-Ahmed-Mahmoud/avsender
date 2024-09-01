<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}

   <!-- font awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- font-family -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet">
   <!-- bootstrap -->
   
   <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
 
   <!-- custom css -->

   <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
   <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/home.css">
   <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/services.css">
   <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/login.css">
   <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/main.css">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/faq.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/planing.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/contact-us.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/feature.css') }}">
   @yield('style')
   @if(app()->getLocale() == 'ar')
   <style>
      body {
         direction: rtl;
      }
   </style>
   <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/main-ar.css">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/login-ar.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/planning-ar.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/faq-ar.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/home-ar.css">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/contact-us-ar.css') }}">
 
   @endif
   <script type="text/javascript">
      $('.language-switch').on('change',function(){
       location.href = `{{ url('/local') }}/`+$(this).val();
       
    });
   </script>



</head>

<body>
   {{-- <div id="loader-container">
      <div id="loader"></div>
   </div> <!-- Loader element --> --}}

   @include('frontend.inc.navbar')