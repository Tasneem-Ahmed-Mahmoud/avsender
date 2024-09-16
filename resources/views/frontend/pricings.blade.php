@php
// Convert the Eloquent collection to an array
$plansArray = $plans->toArray();

// Initialize the "Enterprise" plan as null
$Enterprise = null;

// Find and remove the "Enterprise" plan
foreach ($plansArray as $index => $plan) {
    if (isset($plan['is_popular']) && $plan['is_popular']) {
        $Enterprise = array_splice($plansArray, $index, 1);
        break;
    }
}

// Ensure that the "Enterprise" plan is placed in the second position
if ($Enterprise) {
    // Insert the "Enterprise" plan at the second position if there are other plans
    if (count($plansArray) > 0) {
        array_splice($plansArray, 1, 0, $Enterprise);
    } else {
        // If no other plans, just set "Enterprise" plan as the only item
        $plansArray = $Enterprise;
    }
}

// Convert the reordered array back to a collection
$plans = collect($plansArray);
@endphp

@foreach($plans as $plan)
@php
    // Ensure $plan is not null and is an array
    $plan = $plan ?? [];
@endphp

<div data-aos="fade-up" class="col-xl-4 col-md-6 col-12 mb-3 planning-card"
     data-plan-type="{{ isset($plan['days']) && $plan['days'] == 30 ? 'monthly' : 'yearly' }}">
    <div style="min-height: 300px;height: 100%;"  class="planing-content {{ isset($plan['is_popular']) && $plan['is_popular'] ? 'center-plan' : 'left-plan' }}">
        <div class="planing-top">
            @if (isset($plan['is_popular']) && $plan['is_popular'])
                <div class="popular-plan"><span>{{ __('Popular') }}</span></div>
            @endif
            <div class="d-flex">
                <figure class="planing-img d-flex justify-content-center align-items-center">
                    <img src="{{ isset($plan['icon']) ? asset($plan['icon']) : '' }}" alt="">
                </figure>

                <div class="planing-text">
                    {{-- <p>{{ isset($plan['business_size'][app()->getLocale()]) ? $plan['business_size'][app()->getLocale()] : '' }}</p> --}}
                    <h3 >{{ isset($plan['title'][app()->getLocale()]) ? $plan['title'][app()->getLocale()] : '' }}</h3>
                </div>
            </div>
        </div>
        <div class="planing-middle">
            <p>{{ isset($plan['description'][app()->getLocale()]) ? $plan['description'][app()->getLocale()] : '' }}</p>
            <h6><span>{{ isset($plan['price']) ? amount_format($plan['price'], 'icon') . '/' : '' }}</span> {{ isset($plan['days']) && $plan['days'] == 30 ? __('Monthly') : __('yearly') }}</h6>
        </div>
        <div class="planning-bottom  d-flex flex-column  justify-content-between "  >
            <div>
                <h4>{{ __('What’s included') }}</h4>
            <ul>
                @foreach(isset($plan['limits']) ? $plan['limits'] : [] as $key => $data)
                    <li class="  {{ $data == "no" || $data == '0' ? 'd-none':'d-flex'}}">
                        <i class="fa-solid icon {{ $data == "no" || $data == '0' ? 'bg-warning fa-xmark' : 'fa-check' }}" style="width: 26px; height: 26px"></i>
                        <span class="{{ $data == "no" || $data == '0' ? 'text-warning' : '' }}">
                            {{ $data == "no" || $data == "yes" ? __($key) : __($key) . " : (" . ($data == 'unlimited' ? __($data) . ')' : $data . ')') }}
                        </span>
                    </li>
                @endforeach
            </ul>
            </div>
           
           <div class="mt-auto">
            <a href="{{ route('choose.plan', isset($plan['id']) ? $plan['id'] : '') }}" class="btn btn-subscribe text-center w-100 white-btn">
                {{ isset($plan['is_trial']) && $plan['is_trial'] ? __('Free ' . (isset($plan['trial_days']) ? $plan['trial_days'] : '') . ' days trial') : __('Subscribe Now') }}
            </a>
         
           </div>

        </div>
    </div>
</div>
@endforeach
