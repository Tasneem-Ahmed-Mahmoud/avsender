<section class="statistic"  data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300" 
data-aos-easing="linear">
    <div class="container">
       <div class="row">
          <div class="col-4">
             <div class="content">
                <div class="statistic__top">
                   <img src="{{ asset('frontend/assets/images/home') }}/user-icon.svg" alt="icon" />
                </div>
                <div class="statistic__bottom">
                   <h2>{{$counter->active_customers  ?? '' }}</h2>
                   <p>{{ __('Active Users') }}</p>
                </div>
             </div>
          </div>
          <div class="col-4">
             <div class="content reviews__border">
                <div class="statistic__top">
                   <img src="{{ asset('frontend/assets/images/home') }}/user-icon-stars.svg" alt="icon" />
                </div>
                <div class="statistic__bottom">
                   <h2>{{ $counter->positive_reviews ?? '' }}</h2>
                   <p>{{ __('Positive Reviews') }}</p>
                </div>
             </div>
          </div>

          <div class="col-4 content">
             <div class="content ">
                <div class="statistic__top">
                   <img src="{{ asset('frontend/assets/images/home') }}/user-icon-starsphone.svg" alt="icon" />
                </div>
                <div class="statistic__bottom">
                   <h2 >{{ $userCount }}</h2>
                   <p>{{ __('Total Customers') }}</p>
                </div>
             </div>
          </div>

       </div>
    </div>
 </section>
