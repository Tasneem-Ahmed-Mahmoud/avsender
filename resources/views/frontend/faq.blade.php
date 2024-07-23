{{-- @extends('frontend.layouts.main')
@section('content')
@include('frontend.layouts.header-2')
<main>
   <!-- breadcrumb area start -->
   <div class="breadcrumb__area breadcrumb-height p-relative grey-bg"
   data-background="{{ asset('assets/frontend/img/breadcrumb/breadcrumb.jpg') }}">
   <div class="breadcrumb__scroll-bottom smooth">
      <a href="#faq">
         <i class="far fa-arrow-down"></i>
      </a>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-xxl-12">
            <div class="breadcrumb__content text-center">
               <h3 class="breadcrumb__title">{{ __('Ask Question') }}</h3>
               <div class="breadcrumb__list">
                  <span><a href="{{ url('/') }}">{{ __('Home') }}</a></span>
                  <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                  <span>{{ __('Faq') }}</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- breadcrumb area end -->

<!-- tp-support-area-start -->
<div class="tp-support__area tp-support__bg-2 pt-120 pb-120 p-relative">
   <div class="tp-support__bg tp-support__bg-2">
      <img src="{{ asset('assets/frontend/img/faq/faq-bg-shape-2.png') }}" alt="">
   </div>
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="tp-support__title-box text-center mb-70">
               <h3 class="tp-section-title">{{ __('Need A Support?') }} 🎧</h3>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="tp-support__faq" >
               <div class="tp-custom-accordio-2">
                  <div class="accordion" id="accordionExample-2">
                     @foreach($faqs as $key => $faq)
                     <div class="accordion-items">
                        <h2 class="accordion-header" id="heading-{{ $key+1 }}">
                           <button class="accordion-buttons {{ $key > 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse-{{ $key+1 }}" aria-expanded="{{ $key == 0 ? true : false }}" aria-controls="collapse-1">
                              {{ $faq->title }}
                           </button>
                        </h2>
                        <div id="collapse-{{ $key+1 }}" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}" aria-labelledby="heading-{{ $key+1 }}"
                        data-bs-parent="#accordionExample-2">
                        <div class="accordion-body">
                         {{ $faq->excerpt->value ?? '' }}
                      </div>
                   </div>
                </div>
                @endforeach
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
</div>
<!-- tp-support-area-end -->
</main>
@endsection --}}

@extends('frontend.inc.master')
@section('style')
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/faq.css') }}">
@endsection

@section('content')
@include('frontend.inc.head-2', ['title' => __('Faq') ,'description' => 'We are here to help you'])
<div class="faq_hero_container_section">
<div class="container">
   <div class="faq__content_container">
      <div class="container">
          <div class="row faq__content_container_row mt-2 mb-4">
              
            @foreach($faqs as $key => $faq)

              <div class="col-md-6 col-sm-12 mt-4">
                  <div class="faq_box_content">
                      <div class="d-flex justify-content-between">
                          <div>
                              <p class="faq_box_content-p" id="faqQuestion{{ $loop->iteration }}"> {{ $faq->title }}
                              </p>
                              <div class="collapse" id="collapseExample{{ $loop->iteration }}" data-faq-target="faqQuestion{{ $loop->iteration }}">
                                  <div class="faq_box_content-p">
                                      <hr class="faq_box_content-hr" />
                                      {{ $faq->excerpt->value ?? '' }}
                                  </div>
                              </div>
                          </div>
                         <div  class="more-info-faq-div"id="more-info-faq-div"   >
                              <img src="{{ asset('frontend/assets/images/faq')}}/more-info-faq.svg" alt="more-info-faq" class="more-info-faq"
                                  data-bs-toggle="collapse" href="#collapseExample{{ $loop->iteration }}" role="button"
                                  aria-expanded="false" aria-controls="collapseExample{{ $loop->iteration }}" id="toggleImage" />
                          </div>
                      </div>
                  </div>
              </div>


            @endforeach

             
          </div>

      </div>
  </div>
</div>

</div>
@endsection

@section('script')
<script>
   document.addEventListener('DOMContentLoaded', function () {
       const toggleImages = document.querySelectorAll('.more-info-faq');

       toggleImages.forEach(toggleImage => {
           const targetId = toggleImage.getAttribute('href').substring(1);
           const faqQuestionId = document.getElementById(targetId).getAttribute('data-faq-target');
           const collapseExample = document.getElementById(targetId);
           const moreinfofaqdiv = document.getElementById('more-info-faq-div');

           collapseExample.addEventListener('shown.bs.collapse', function () {
               toggleImage.src = "frontend/assets/images/faq/less-info-faq.svg";
               document.getElementById(faqQuestionId).style.color = '#29387E';
               document.getElementById(faqQuestionId).style.fontWeight = '500px';
               document.getElementById(moreinfofaqdiv).style.alignItems = 'start';
           });

           collapseExample.addEventListener('hidden.bs.collapse', function () {
               toggleImage.src = "frontend/assets/images/faq/more-info-faq.svg";
               document.getElementById(faqQuestionId).style.color = '';
               document.getElementById(faqQuestionId).style.fontWeight = '400px';
           });
       });
   });
</script>
   
@endsection