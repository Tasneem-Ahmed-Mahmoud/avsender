
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
@php
  
  $plan=collect($plan);
@endphp

<div class="col-xl-4 col-md-6 col-12 mb-3 planning-card"
  data-plan-type="{{ $plan['days'] == 30 ? 'monthly' : 'yearly' }}">
  <div class="planing-content {{ $plan['is_popular']? 'center-plan' : 'left-plan' }}">
    <div class="planing-top ">
      @if ($plan['is_popular'])
      <div class="popular-plan "> <span>{{ __('Popular')
          }}</span> </div>
      @endif
      <div class="d-flex ">


        <figure class="planing-img  d-flex justify-content-center align-items-center">
          <img src="{{asset( $plan['icon']) }}" alt="">
        </figure>

        <div class="planing-text ">
          <p>{{ $plan['business_size'][app()->getLocale()]}}</p>
          <h3>{{$plan['title'][app()->getLocale()]}}</h3>
        </div>
      </div>
    </div>
    <div class="planing-middle">
      <p>{{ $plan['description'][app()->getLocale()] }}</p>
      <h6><span>{{ amount_format($plan['price'], 'icon') .'/'}}</span> {{ $plan['days'] == 30 ? __('Monthly') :
        __('yearly') }}</h6>
    </div>
    <div class="planning-bottom">
      <h4>{{ __('What’s included') }}</h4>
      <ul>
        @foreach($plan['limits'] ?? [] as $key => $data)
        <li style="display: flex">
          <i class="fa-solid icon {{ $data  == "no" ||$data =='0' ? 'bg-warning fa-xmark' : 'fa-check' }}"  style="width: 26px; height: 26px"></i>
          <span class="{{$data == "no"|| $data =='0'? 'text-warning' : '' }}">
            {{ $data=="no" ||$data=="yes"  ? __($key) : __($key) . " : (".( $data == 'unlimited' ? __($data) .')' : $data.')') }}


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
