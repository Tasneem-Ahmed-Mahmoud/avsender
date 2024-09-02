<section class="statistic">
    <div class="container">
       <div class="row">
          <div class="col-4">
             <div class="content">
                <figure class="statistic__top">
                   <img src="{{ asset('frontend/assets/images/home') }}/user-icon.svg" alt="icon" />
                </figure>
                <div class="statistic__bottom">
                   <h2>{{$counter->active_customers  ?? '' }}</h2>
                   <p>{{ __('Active Users') }}</p>
                </div>
             </div>
          </div>
          <div class="col-4">
             <div class="content reviews__border">
                <figure class="statistic__top">
                   <img src="{{ asset('frontend/assets/images/home') }}/user-icon-stars.svg" alt="icon" />
                </figure>
                <div class="statistic__bottom">
                   <h2>{{ $counter->positive_reviews ?? '' }}</h2>
                   <p>{{ __('Positive Reviews') }}</p>
                </div>
             </div>
          </div>
 
          <div class="col-4">
             <div class="content ">
                <figure class="statistic__top">
                   <img src="{{ asset('frontend/assets/images/home') }}/user-icon-starsphone.svg" alt="icon" />
                </figure>
                <div class="statistic__bottom">
                   <h2 >{{ $userCount }}</h2>
                   <p>{{ __('Total Customers') }}</p>
                </div>
             </div>
          </div>
 
       </div>
    </div>
 </section>