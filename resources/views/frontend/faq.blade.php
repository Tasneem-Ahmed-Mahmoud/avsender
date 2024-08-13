
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