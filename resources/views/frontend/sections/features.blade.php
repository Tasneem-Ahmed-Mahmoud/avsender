 @php
 $features = \App\Models\Post::where('type','feature')
            ->where('featured',1)
            ->where('status',1)
            ->where('lang',app()->getLocale())
            ->with('preview','excerpt')
            ->latest()
          
            ->get();
 @endphp






       <div class="faq__content_container">
           <div class="container">
               <div class="swiper-container">
                   <div class="swiper-wrapper">
                  
                     @foreach($features as $feature)
                       <div class="swiper-slide">
                           <div class="Features-box">
                               <img src="{{ asset($feature->preview->value ?? '') }}" alt="imag-chat" class="features-image" />
                         <a href="{{ url('feature/'.$feature->slug) }}">      <h3 class="Features-box_h3">{{ Str::limit($feature->title,20) }}</h3></a>
                               <p class="Features-box-p">{{  Str::limit($feature->excerpt->value ?? '',100) }}.</p>
                               <a href="{{ url('feature/'.$feature->slug) }}" class="Read_More">{{ __('Read More') }}<img src="{{ asset('frontend/assets/images/home') }}/ei_arrow-up.svg"
                                       class="mx-1" alt="arrow-up" /></a>
                           </div>
                       </div>
                       @endforeach
                   </div>
                
               </div>
           </div>
       </div>



