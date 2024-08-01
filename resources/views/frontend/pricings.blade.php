 {{-- <div id="price" class="tp-price__area tp-price__border pt-120 pb-90 ">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6 col-10">
            <div class="tp-price__section text-center pb-60 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
               <h3 class="tp-section-title-sm pb-20">{{ __('Pricing to suite all size of business') }}</h3>
               <span>{{ __('*We help companies of all sizes') }}</span>
            </div>
         </div>
      </div>
      <div class="row g-0 align-items-end align-items-lg-center">
         @foreach($plans ?? [] as $plan)
         <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
            <div class="tp-price__item {{ $plan->is_recommended == 1 ? 'tp-price__active z-index' : '' }}">
               <div class="tp-price__icon d-flex justify-content-between align-items-center">
                  <span class="icon {{ $plan->labelcolor }}"><i class="{{ $plan->iconname }}"></i></span>
                  <span>{{ __('Plan '.$plan->title)}} </span>
               </div>
               <h3 class="tp-price__title">{{ amount_format($plan->price,'icon') }} <small class="tp-price__small_title">{{ $plan->days == 30 ? __('/month') : __('/year') }}</small></h3>
               <div class="tp-price__list">
                  <ul>
                     @foreach($plan->data ?? [] as $key => $data)
                     <li class="{{ planData($key,$data)['value'] == false && planData($key,$data)['is_bool'] == true ? 'd-none' : '' }}">

                        {{ ucfirst(str_replace('_',' ',planData($key,$data)['title'])) }} 
                     </li>
                     @endforeach
                  </ul>
               </div>
               <div class="tp-price__btn">
                  <a class="tp-btn-border" href="{{ url('/register',$plan->id) }}"><span>{{ $plan->is_trial == 1 ? __('Free '.$plan->trial_days.' days trial') : __('Sign Up Now') }}</span></a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div> --}}



<!-- ################################## planing ############################################### -->
<section class="planing mt-5 mb-5">
   <div class="container">
       <div class="row">
           <div class="planing-header text-center">
              <div class="planing-title">
               <h2>Subscription Prices</h2>
               <p>Subscribe now with our different plans that suits all business sizes and enjoy our amazing features.</p>
               <span>(No extra fees, cancel anytime).</span>
              </div>

              <ul class="nav m-auto">
                   <li class="nav-item ">
                     <a class="nav-link plan-link active-plan" href="#">yearly</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link plan-link" href="#">monthly</a>
                   </li>
              </ul>
           </div>

           @foreach($plans ?? [] as $plan)
           <div class="col-xl-4 col-md-6 col-12 mb-3" data-plan-type="{{ $plan->days == 30 ? 'monthly' : 'yearly' }}">
             <div class="planing-content {{ $plan->is_recommended == 1 ? 'center-plan' : 'left-plan' }}">
               <div class="planing-top d-flex">
                 <figure class="planing-img d-flex justify-content-center align-items-center"><img src="assets/images/planing/1.svg" alt=""></figure>
                 <div class="planing-text">
                   <p>{{ __('Plan '.$plan->title)}}</p>
                   <h3>{{ __('Plan '.$plan->title)}}</h3>
                 </div>
               </div>

               <div class="planing-middle">
                 <p>Lorem ipsum dolor sit amet doloroli sitiol conse ctetur adipiscing elit.</p>
                 <h6><span>{{ amount_format($plan->price,'icon') }}</span> {{ $plan->days == 30 ? __('/month') : __('/year') }}</h6>
               </div>
               <div class="planning-bottom">
                 <h4>What’s included</h4>
                 <ul>
                   @foreach($plan->data ?? [] as $key => $data)
                   <li><i class="fa-solid {{ planData($key,$data)['value'] == false && planData($key,$data)['is_bool'] == true ? 'bg-warning fa-xmark' : 'fa-check' }}"></i> <span class="{{ planData($key,$data)['value'] == false && planData($key,$data)['is_bool'] == true ? 'text-warning' : '' }}">{{ ucfirst(str_replace('_',' ',planData($key,$data)['title'])) }}</span></li>
                   @endforeach
                 </ul>
             

                 <a  href="{{ route('choose.plan',$plan->id) }}" class="btn btn-subscribe text-center w-100" >{{ $plan->is_trial == 1 ? __('Free '.$plan->trial_days.' days trial') : __('Subsribe Now') }}</a>
               
              

               
               </div>
             </div>
           </div>
           @endforeach

       </div>
   </div>
</section>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.plan-link');
    const planItems = document.querySelectorAll('[data-plan-type]');

    // Set default display to "yearly" plans
    const defaultType = 'yearly';

    // Initialize display based on the default type
    planItems.forEach(plan => {
      if (plan.getAttribute('data-plan-type') === defaultType) {
        plan.classList.add('visible');
      } else {
        plan.classList.remove('visible');
      }
    });

    // Set default active link
    navLinks.forEach(link => {
      if (link.textContent.toLowerCase() === defaultType) {
        link.classList.add('active-plan');
      } else {
        link.classList.remove('active-plan');
      }
    });

    // Add click event listeners
    navLinks.forEach(link => {
      link.addEventListener('click', function(event) {
        event.preventDefault();
        const selectedType = this.textContent.toLowerCase();

        // Toggle active class on nav links
        navLinks.forEach(link => link.classList.remove('active-plan'));
        this.classList.add('active-plan');

        // Show/Hide plans with animation based on the selected type
        planItems.forEach(plan => {
          if (plan.getAttribute('data-plan-type') === selectedType) {
            plan.classList.add('visible');
          } else {
            plan.classList.remove('visible');
          }
        });
      });
    });
  });
</script>
