

@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/blog.css') }}">
 
@endsection
@section('content')
<div class="faq_hero_container_section">
    <div class="row">
        <div class="col-12 hero_container hero_container-feature">
            <div>
                <h3 class="hero_h3">{{ __("Blog") }}</h3>
                <p class="hero_p">{{__('Subscribe now with our different plans that suits all business sizes and enjoy our amazing features .')}}</p>
                <a href="{{ url('/about') }}">
                    <button class="btn btn-button-hero">{{ __('Work With Us') }}</button>
                </a>
            </div>
        </div>
    </div>
    <div class="faq__content_container">
        <div class="container">
            <div id="blog-container" class="row faq__content_container_row mt-2 mb-4 justify-content-start">
                {{-- start --}}
                @foreach($blogs ?? [] as $blog)
                <div class="col-md-4 col-sm-12 mt-4 Features-box-col-sm ">
                    <a href="{{ url('/blog',$blog->slug) }}">
                        <div class="blog-box">

                            <img src="{{ asset($blog->preview->value ?? '') }}" alt="imag-chat" class="features-image-blog" alt="{{ $blog->title }}" height="200"/>
                            <div class="blog-content">
                                <h3 class="Features-box_h3">{{  Str::limit($blog->title ?? '',50) }}</h3>
                                <p class="Features-box-p">{{ Str::limit($blog->shortDescription->value ?? '',120) }}
                                    </p>
                                <a href="{{ url('/blog',$blog->slug) }}" class="Read_More">{{ __('Read More') }}<img
                                        src="{{ asset('frontend/assets/images/blogs') }}/ei_arrow-up.svg" class="mx-1" alt="arrow-up" /></a>
                            </div>

                        </div>
                    </a>

                </div>
                @endforeach
               {{-- end --}}
           <div>
            {{ $blogs->links()  }}
           </div>
        </div>
    </div>
</div>    
@endsection


