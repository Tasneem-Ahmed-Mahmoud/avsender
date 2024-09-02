
@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/about.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/services.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
   .about-statistic__conten {
      gap: 35px;
   }

   .about-statistic__conten h4 {
      font-weight: 600;
      font-size: 40px;
      color: #29387E;
   }

   .about-statistic__conten p {
      font-weight: 400;
      font-size: 15px;
      line-height: 26px;
      color: #525252;
   }
   .about-statistic .row {
        margin-top: 70px !important;
        margin-bottom: 41px;
        padding: 8px 12px 8px 12px;
        border-radius: 16px;

    }

   @media  (min-width: 792px) and (max-width: 1119px) {
      .about-statistic__conten {
        gap: 10px;
    }


    .about-statistic__conten h4 {
      font-weight: 500;
      font-size: 30px;

   }





}

/* @media (max-width: 1400px) {
   .about-statistic .row {
        margin-top: 70px !important;


    }
} */


</style>

<script>
   document.addEventListener("DOMContentLoaded", function() {
    // Select all counter elements
    const counters = document.querySelectorAll(".counter");

    // Set all counters to 0 initially
    counters.forEach(counter => {
        counter.textContent = '0';
    });

    // Function to animate the counter
    function animateCounter(element, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            element.textContent = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    // Animate the counters after setting them to 0
    counters.forEach(counter => {
        const targetNumber = parseInt(counter.getAttribute("data-count")); // Get the target number from a data attribute
        animateCounter(counter, 0, targetNumber, 2000); // Animate from 0 to targetNumber in 2000ms (2 seconds)
    });
});

</script>
@endsection
@section('content')
@include('frontend.inc.head-2',["title"=>__('About Us'),"description"=>$about->breadcrumb_title ?? ''])








<section class="about">

   <div class="container">
      <div class="row">
         <header class="about-header d-flex flex-column  justify-content-center align-items-center  ">
            <span>{{ __('About Company') }}</span>
            <h2 class="w-75">{{ $about->section_title ?? '' }}</h2>
         </header>
         <div class="about-content row justify-content-center ">
            {{-- left --}}
            <div class="col-lg-6 row ">
               <div class="col-md-6">
                  <div class="content p-1  text-center">
                     <img src="{{ asset($about->about_image_2 ?? '') }}" alt="" class="w-100">
                  </div>
               </div>

               <div class="col-md-6 ">
                  <div class="content p-1">

                     <div class="about-box mb-10  d-flex align-items-center  ">
                        <span>{{ $about->experience ?? '' }}</span>
                        <p>{{ $about->experience_title ?? '' }}</p>
                     </div>
                     <div class=" mt-3">
                        <img src="{{ asset($about->about_image_1 ?? '') }}" alt="" class="w-100">
                     </div>
                  </div>
               </div>
            </div>

            {{-- right --}}
            <div class="col-lg-6 ">
               <div class="content p-1">
                  <div class="about-inner-content">
                     @foreach($descriptions as $description)
                     <p>{{ $description }}</p>
                     @endforeach
                  </div>

                  <div class="about-inner__list">
                     <ul>
                        @foreach($facilities as $facility)
                        <li class="d-flex align-items-center  ">
                           <i class="fa-solid fa-check" style="width: 26px; height: 26px"></i>
                           <span>{{ $facility }}</span>
                        </li>
                        @endforeach
                     </ul>
                  </div>

                  <div class="about-inner__btn d-flex align-items-center justify-content-between ">
                     @if(!empty($about->button_title))
                     <a class="btn btn-work-with-us text-center" href="{{ $about->button_link }}"><span>{{
                           $about->button_title
                           }}</span></a>
                     @endif


                     @if(!empty($about->introducing_video))
                     <a class="btn btn-work-with-us text-center" href="{{ $about->introducing_video }}"><i
                           class="fas fa-play"></i></a>
                     @endif
                  </div>


               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<!-- ################################## featrures############################################### -->


<section>
   <div class="container">
      <div class="row">
         <header>
            <h2 class=" text-center title">{{ __('Our Features') }}</h2>
         </header>
         @include('frontend.sections.features',['features'=>$features])
      </div>
   </div>
</section>

<!-- ################################## statistic ############################################### -->
<section class="about-statistic">
   <div class="container">
      <div class="row justify-content-between bg-white">

         {{-- first --}}
         <div class="col-md-3 col-6">
            <div class="about-statistic__conten d-flex ">
               <figure class="about-statistic__icon ">
                  <img src="{{ asset('assets/frontend/img/counter/counter-7.png') }}" alt="">
               </figure>
               <div class="about-statistic-right d-flex flex-column">

                  <h4><span class="counter" data-count="{{ $counter->experience ?? '' }}">0</span>+</h4>

                  <p>{{ __('Years of Experience') }}</p>
               </div>
            </div>
         </div>
         {{-- second --}}

         <div class="col-md-3 col-6">
            <div class="about-statistic__conten d-flex ">
               <figure class="about-statistic__icon ">
                  <img src="{{ asset('assets/frontend/img/counter/counter-6.png') }}" alt="">
               </figure>
               <div class="about-statistic-right d-flex flex-column">

                  <h4><span class="counter" data-count="{{$counter->active_customers  ?? '' }}">0</span>+</h4>

                  <p>{{ __('Active Customers') }}</p>
               </div>
            </div>
         </div>
         {{-- third --}}

         <div class="col-md-3 col-6">
            <div class="about-statistic__conten d-flex ">
               <figure class="about-statistic__icon ">
                  <img src="{{ asset('assets/frontend/img/counter/counter-5.png') }}" alt="">
               </figure>
               <div class="about-statistic-right d-flex flex-column">
                  <h4><span class="counter" data-count="{{ $counter->positive_reviews ?? '' }}" >0</span>+</h4>
                  <p>{{ __('Positive Reviews') }}</p>
               </div>
            </div>
         </div>
         {{-- fourth --}}


         <div class="col-md-3 col-6">
            <div class="about-statistic__conten d-flex ">
               <figure class="about-statistic__icon ">
                  <img src="{{ asset('assets/frontend/img/counter/counter-8.png') }}" alt="">
               </figure>
               <div class="about-statistic-right d-flex flex-column">

                  <h4><span class="counter" data-count="{{ $counter->satisfied_customers  ?? '' }}">0</span>+</h4>

                  <p>{{ __('Satisfied customers') }}</p>
               </div>
            </div>
         </div>



      </div>
   </div>
</section>


<!-- ################################## planing ############################################### -->
<section class="planing  mb-5">
   <div class="container">
      <div class="row">
         <div class="planing-header text-center">
            <div class="planing-title">
               <h2>{{ __('Pricing Plans Title') }}</h2>
               <p>{{ (__('Pricing Plans Description')) }}</p>
               <span>{{ __("(No extra fees, cancel anytime).") }}</span>
            </div>

            <ul class="nav m-auto">
               <li class="nav-item">
                  <a id="yearly" class="nav-link plan-link active-plan" href="#">{{ __('yearly') }}</a>
               </li>
               <li class="nav-item">
                  <a id="monthly" class="nav-link plan-link" href="#">{{ __('Monthly') }}</a>
               </li>
            </ul>
         </div>
         @include('frontend.pricings')
      </div>
   </div>
</section>



<section class="about-faq">

   <div class="container">
      <div class="row justify-content-between ">
         <div class="col-lg-7 col-md-6 row ">
            @foreach($faqs as $key => $faq)
            <div class="col-md-12 mb-4">
               <div class="faq_box_content faq_box_content-home">
                   <div class="w-100 d-flex flex-column justify-content-between">

                       <div class="d-flex justify-content-between align-items-center w-100">

                              <span class="faq_box_content-p" id="faqQuestion{{ $loop->iteration }}"> {{ $faq->title }}
                              </span>
                           <div class="more-info-faq-div" id="more-info-faq-div">
                               <img src="{{ asset('frontend/assets/images/faq')}}/more-info-faq.svg"
                                    alt="more-info-faq" class="more-info-faq"
                                    data-bs-toggle="collapse"
                                    href="#collapseExample{{ $loop->iteration }}" role="button"
                                    aria-expanded="false"
                                    aria-controls="collapseExample{{ $loop->iteration }}"
                                    id="toggleImage" />
                           </div>
                       </div>
                       <div class="collapse" id="collapseExample{{ $loop->iteration }}"
                            data-faq-target="faqQuestion{{ $loop->iteration }}">
                           <div class="faq_box_content-p">
                               <hr class="faq_box_content-hr" />
                               {{ $faq->excerpt->value ?? '' }}
                           </div>
                       </div>
                   </div>
               </div>
            </div>
            @endforeach

            <div class="about__reade-more">
               <a href="{{ url('/faq') }}" class="btn btn-work-with-us">{{ __('Read More') }}</a>
            </div>
         </div>


         <div class="col-md-6 col-lg-5 ">
            <div class="about-faq-right d-flex align-items-center justify-content-center flex-column gap-2">
               <div class="about-faq-right__icon">
                  <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M5.9542 23.9764L0 29V0H30V23.9764H5.9542Z" fill="#017EFA" />
                  </svg>
               </div>

               <div class="about-faq-right__content text-center">
                  <h4 class="tp-faq__faq-sm-title text-center">{{ __('Do you have more questions?') }}</h4>
                  <p class="text-center">{{ __('faq_description') }}</p>
                  <a href="{{ url('/contact') }}" class="btn btn-work-with-us">{{ __('Shoot a Direct Mail') }}</a>
               </div>
            </div>





         </div>
      </div>
   </div>

</section>






@endsection



@section('script')


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('frontend/assets/js/faq.js') }}"></script>
<script src="{{ asset('frontend/assets/js/planing.js') }}"></script>
<script src="{{ asset('frontend/assets/js/service.js') }}"></script>


<script>
   document.addEventListener('DOMContentLoaded', function() {
    // Select elements that have either 'col-lg-', 'col-md-', or 'col-sm-' classes and are direct children of an <a> element
    document.querySelectorAll('a > [class*="col-lg-"], a > [class*="col-md-"], a > [class*="col-sm-"]').forEach(function(element) {
        const parent = element.parentNode;
        parent.parentNode.insertBefore(element, parent);
        parent.remove();
    });
    // Remove empty <a> tags
    $('a:empty').remove();
});



   $(document).ready(function() {
    $('a').each(function() {
        if ($.trim($(this).html()) === '') {
            $(this).remove();
        }
    });
});

</script>
@endsection
