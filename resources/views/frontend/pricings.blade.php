<!-- ################################## planing ############################################### -->
<section class="planing mt-5 mb-5">
  <div class="container">
    <div class="row">
      <div class="planing-header text-center">
        <div class="planing-title">
          <h2>Subscription Prices</h2>
          <p>Subscribe now with our different plans that suit all business sizes and enjoy our amazing features.</p>
          <span>(No extra fees, cancel anytime).</span>
        </div>

        <ul class="nav m-auto">
          <li class="nav-item">
            <a class="nav-link plan-link active-plan" href="#">yearly</a>
          </li>
          <li class="nav-item">
            <a class="nav-link plan-link" href="#">monthly</a>
          </li>
        </ul>
      </div>

      @php
        // Convert the Eloquent collection to an array
        $plansArray = $plans->toArray();

        // Find and remove the "Special Offer" plan
        $specialOffer = null;
        foreach ($plansArray as $index => $plan) {
          if ($plan['title'] === 'Special Offer') {
            $specialOffer = array_splice($plansArray, $index, 1);
            break;
          }
        }

        // Reorder the plans so that the "Special Offer" plan is in the second position
        if ($specialOffer) {
          $plansArray = array_merge(
            [array_shift($plansArray)], // First plan
            $specialOffer,               // Special Offer plan
            $plansArray                  // Remaining plans
          );
        }

        // Convert the reordered array back to a collection
        $plans = collect($plansArray);
      @endphp

      @foreach($plans as $plan)
      <div class="col-xl-4 col-md-6 col-12 mb-3" data-plan-type="{{ $plan['days'] == 30 ? 'monthly' : 'yearly' }}">
        <div class="planing-content {{ $plan['title'] === 'Special Offer' ? 'center-plan' : 'left-plan' }}">
          <div class="planing-top d-flex">
            <figure class="planing-img d-flex justify-content-center align-items-center">
              <img src="{{ $plan['icon'] }}" alt="">
            </figure>
            <div class="planing-text">
              <p>{{ __($plan['business_size']) }}</p>
              <h3>{{ __('Plan '.$plan['title']) }}</h3>
            </div>
          </div>

          <div class="planing-middle">
            <p>{{ $plan['description'] }}</p>
            <h6><span>{{ amount_format($plan['price'], 'icon') }}</span> {{ $plan['days'] == 30 ? __('/month') : __('/year') }}</h6>
          </div>
          <div class="planning-bottom">
            <h4>What’s included</h4>
            <ul>
              @foreach($plan['data'] ?? [] as $key => $data)
              <li>
                <i class="fa-solid {{ planData($key, $data)['value'] == false && planData($key, $data)['is_bool'] == true ? 'bg-warning fa-xmark' : 'fa-check' }}"></i>
                <span class="{{ planData($key, $data)['value'] == false && planData($key, $data)['is_bool'] == true ? 'text-warning' : '' }}">
                  {{ ucfirst(str_replace('_', ' ', planData($key, $data)['title'])) }}
                </span>
              </li>
              @endforeach
            </ul>

            <a href="{{ route('choose.plan', $plan['id']) }}" class="btn btn-subscribe text-center w-100">
              {{ $plan['is_trial'] == 1 ? __('Free '.$plan['trial_days'].' days trial') : __('Subscribe Now') }}
            </a>
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
