@extends('frontend.inc.master')
@section('style')

<style>
    .hero-image-header-up {
        color: var(--white-color);
        min-height: 27.938rem;
        padding: 40px;
        width: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url('http://127.0.0.1:8000/frontend/assets/images/faq/background-img.svg');
    }

    .hero-image-header-up h1 {
        font-size: 60px;
        font-weight: 700;
        line-height: 96px;
        text-align: center;
    }

    .hero-image-header-up p {
        font-size: 20px;
        font-weight: 600;
        line-height: 32px;
        text-align: center;
    }

    .hero-image-header-down {
        text-align: center; /* Center the image horizontally */
    }

   

    .hero-image-header-down img {
    margin-top: -100px; /* Adjust this value to fit your design needs */
    max-width: 100%; /* Ensure the image doesn't overflow */
    height: auto; /* Maintain aspect ratio */
}

.hero-image-header-down img{
    max-width: 75%;
}


@screen (max-width:1200px) {
 .hero-image-header-up h1{
    //styleName: 24/bold;
font-family: Raleway;
font-size: 24px;
font-weight: 700;
line-height: 38.4px;
text-align: center;

 }   
}
</style>

@endsection

@section('content')

<header class="hero-image-header">
    <div class="continer-flouid hero-image-header-up">
        <div class="container">
            <div class="row">
                <div class="row justify-content-center align-items-center hero-content">
                    <h1 class="text-center">Auto Responder (BOT)</h1>
                    <p class="text-center w-md-75">If you are looking for how to set auto-reply in WhatsApp business and
                        WhatsApp auto-reply message sample, you are at the right place. In this post, we’ll help you
                        understand the nitty-gritty of WhatsApp Chatbots. To start off with, let’s talk about how
                        auto-response for WhatsApp works.</p>
                    <a href="{{ url('/about') }}" class="btn btn-work-with-us text-center">{{ __('Work With Us') }}</a>
                </div>
            </div>
        </div>
    </div>

    <figure class="hero-image-header-down d-flex justify-content-center align-items-center">
        <img src="http://127.0.0.1:8000/uploads/features/banners/Reset API for app.svg" alt="" >
    </figure>
</header>



<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 wrapper-content">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, fugit!</h2>
                <p>
                   Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat velit beatae illo aperiam quidem voluptatum quas quisquam, provident deserunt, tempore sit quod laboriosam, ipsa distinctio? Adipisci commodi optio maxime harum!
            </div>
        </div>
    </div>
</div>

@endsection
