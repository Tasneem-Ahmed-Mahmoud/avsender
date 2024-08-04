

@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/blog.css') }}">
 <style>
   .pagination .page-item {
  
padding: 5px 4px 5px 4px !important;

border-radius: 4px !important;

background: #FFFFFF !important ;
border: 1px solid #E4E6EE !important;
margin: 0 6px




   }

   .pagination .page-item .page-link {
      font-size: 14px;
font-weight: 700;
line-height: 22.4px;
text-align: center;
color: #29387E;
border: none;
   }

   .pagination .page-item.active {
      background: #29387E !important;

   }
   .pagination .page-item.active  .page-link {
      color:#FFFFFF !important;
      background: #29387E !important;
   }
  
   .pagination .page-item.disabled{
    background: #C8C8C8 !important;

   }
   .pagination .page-item.disabled .page-link {
      background: #C8C8C8 !important;
      color: #FFFFFF;
      font-size: 15px;
   }
 </style>
@endsection
@section('content')
<div class="faq_hero_container_section">
    <div class="row">
        <div class="col-12 hero_container hero_container-feature">
            <div>
                <h3 class="hero_h3">Blog</h3>
                <p class="hero_p">Subscribe now with our different plans that suits all business sizes and enjoy our
                    amazing features.</p>
                <a href="#">
                    <button class="btn btn-button-hero">Work With Us</button>
                </a>
            </div>
        </div>
    </div>
    <div class="faq__content_container">
        <div class="container">
            <div id="blog-container" class="row faq__content_container_row mt-2 mb-4">
                {{-- start --}}
                @foreach($blogs ?? [] as $blog)
                <div class="col-md-4 col-sm-12 mt-4 Features-box-col-sm">
                    <a href="{{ url('/blog',$blog->slug) }}">
                        <div class="blog-box">

                            <img src="{{ asset($blog->preview->value ?? '') }}" alt="imag-chat" class="features-image-blog" alt="{{ $blog->title }}"/>
                            <div class="blog-content">
                                <h3 class="Features-box_h3">{{ $blog->title }}</h3>
                                <p class="Features-box-p">{{ Str::limit($blog->shortDescription->value ?? '',200) }}
                                    .</p>
                                <a href="{{ url('/blog',$blog->slug) }}" class="Read_More">Read More <img
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


