<div class="faq-text-home">
   <h3 class="FAQ-h3-home">{{ __('FAQ') }}</h3>
   <p class="FAQ-p-home">{{ __('We are here to help you') }}</p>
   <div class="faq__content_container">
       <div class="container">
           <div class="row faq__content_container_row mt-2 mb-4 d-flex justify-content-center">
               @foreach($faqs as $key => $faq)
               <div class="col-md-10 col-sm-12 mt-4">
                   <div class="faq_box_content faq_box_content-home">
                       <div class="d-flex justify-content-between">
                           <div>
                               <p class="faq_box_content-p" id="faq-{{ $loop->iteration }}"> {{ $faq->title }}</p>
                               <div class="collapse" id="collapse-{{ $loop->iteration }}" data-faq-target="faq-{{ $loop->iteration }}">
                                   <div class="faq_box_content-p">
                                       <hr class="faq_box_content-hr" />
                                       {{ $faq->excerpt->value ?? '' }}
                                   </div>
                               </div>
                           </div>
                           <div class="more-info-faq-div" id="more-info-faq-div">
                               <img src="{{ asset('frontend/assets/images/faq')}}/more-info-faq.svg" alt="more-info-faq"
                                   class="more-info-faq" data-bs-toggle="collapse" href="#collapse-{{ $loop->iteration }}" role="button"
                                   aria-expanded="false" aria-controls="collapse-{{ $loop->iteration }}" id="toggleImage-{{ $loop->iteration }}" />
                           </div>
                       </div>
                   </div>
               </div>
               @endforeach
           </div>
       </div>
   </div>
</div>
