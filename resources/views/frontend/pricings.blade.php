@php
// Convert the Eloquent collection to an array
$plansArray = $plans->toArray();

// Initialize the "Enterprise" plan as null
$Enterprise = null;

// Find and remove the "Enterprise" plan
foreach ($plansArray as $index => $plan) {
if ($plan['is_popular']) {
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
<div class="col-xl-4 col-md-6 col-12 mb-3 plan-card" data-plan-type="{{ $plan['days'] == 30 ? 'monthly' : 'yearly' }}">
  <div class="planing-content {{ $plan['is_popular']? 'center-plan' : 'left-plan' }}">
    <div class="planing-top ">
      @if ($plan['is_popular'])
      <div class="popular-plan "> <span>{{ __('Popular')
          }}</span> </div>
      @endif
      <div class="d-flex ">


        <figure
          class="planing-img  d-flex justify-content-center align-items-center">
          <img src="{{asset( $plan['icon']) }}" alt="">
        </figure>

        <div
          class="planing-text ">
          <p>{{ __($plan['business_size']) }}</p>
          <h3>{{ __($plan['title']) }}</h3>
        </div>
      </div>
    </div>

    <div class="planing-middle">
      <p>{{ $plan['description'] }}</p>
      <h6><span>{{ amount_format($plan['price'], 'icon') .'/'}}</span> {{ $plan['days'] == 30 ? __('Monthly') :
        __('yearly') }}</h6>
    </div>
    <div class="planning-bottom">
      <h4>{{ __('What’s included') }}</h4>
      <ul>
        @foreach($plan['data'] ?? [] as $key => $data)
        <li>
          <i class="fa-solid {{$data == false || $data==" false" ? 'bg-warning fa-xmark' : 'fa-check' }}"></i>
          <span class="{{ $data == false || $data==" false" ? 'text-warning' : '' }}">
            {{ $data =="false"|| $data=="true" ? $key : $key ." : ($data)" }}
          </span>
        </li>
        @endforeach
      </ul>

      <a href="{{ route('choose.plan', $plan['id']) }}" class="btn btn-subscribe text-center w-100">
        {{ $plan['is_trial'] ? __('Free '.$plan['trial_days'].' days trial') : __('Subscribe Now') }}
      </a>
    </div>
  </div>
</div>
@endforeach