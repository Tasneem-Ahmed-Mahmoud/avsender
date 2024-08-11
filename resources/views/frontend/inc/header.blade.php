<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('meta_title')</title>
  <meta name="meta_description" content="@yield('meta_description')">
  <meta name="meta_keywords" content="@yield('meta_keywords')">
 
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- font-family -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <!-- bootstrap -->
  {{-- <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css"> --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- custom css -->
 
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/home.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/services.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/login.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/main.css">
  @yield('style')
  <script type="text/javascript">
      
    $('.language-switch').on('change',function(){
       location.href = `{{ url('/local') }}/`+$(this).val();
       
    });
 </script>
</head>

<body >
   {{-- <div id="loader-container">
      <div id="loader"></div>
  </div> <!-- Loader element --> --}}

    @include('frontend.inc.navbar')

 