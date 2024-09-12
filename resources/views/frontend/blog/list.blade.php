@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/blog.css') }}">
@endsection
@section('content')
<div class="faq_hero_container_section">
    <div class="row">
        <div class="col-12 hero_container hero_container-feature">
            <div>
                <h3 data-aos="fade-up" data-aos-duration="500" data-aos-delay="150" 
                data-aos-easing="linear" class="hero_h3">{{ __('Blog') }}</h3>
                <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="250" 
                data-aos-easing="linear" class="hero_p">
                    {{ __('Subscribe now with our different plans that suits all business sizes and enjoy our amazing features .') }}
                    
                </p>
                <a data-aos="fade-up" data-aos-duration="500" data-aos-delay="350" 
                data-aos-easing="linear"  href="{{ url('/about') }}">
                    <button class="btn btn-button-hero btn-work-with-us">{{ __('Work With Us') }}</button>
                </a>
            </div>
        </div>
    </div>
    <div class="faq__content_container" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150" 
    data-aos-easing="linear">
        <div class="container">
            <div id="blog-container" class="row  faq__content_container_row   mb-4   justify-content-start">
                {{-- start --}}
                @foreach ($blogs ?? [] as $blog)
                <div class="col-md-4 col-sm-12 mt-4 Features-box-col-sm ">
                    <a href="{{ route('frontend.blogs.show',$blog->slug) }}">
                        <div class="blog-box">

                            <img src="{{ asset($blog->photo?? '') }}" alt="imag-chat" class="features-image-blog"
                                alt="{{ $blog->title }}" height="200" />
                            <div class="blog-content">
                                <h3 class="Features-box_h3">{{ Str::limit($blog->title ?? '', 50) }}</h3>
                                <p class="Features-box-p">{{ Str::limit($blog->description ?? '', 120) }}
                                </p>
                                <a href="{{ route('frontend.blogs.show',$blog->slug) }}" class="Read_More "
                                    style="margin-top:auto;">{{ __('READ MORE') }}<img
                                        src="{{ asset('frontend/assets/images/blogs') }}/ei_arrow-up.svg" class="mx-1"
                                        alt="arrow-up" /></a>
                            </div>

                        </div>
                    </a>

                </div>
                @endforeach
                {{-- end --}}
                <div>
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>
    @endsection