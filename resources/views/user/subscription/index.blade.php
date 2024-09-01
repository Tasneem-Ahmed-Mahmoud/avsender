@extends('layouts.main.app')
@section('head')
@include('layouts.main.headersection',[
'title'   => __('Subscription Plan'),
'buttons' => [
	 [
      'name'=>'<i class="fi  fi-rs-calendar-clock"></i>&nbsp&nbsp'.__('Subscriptions History'),
      'url'=> url('/user/subscriptions/log'),
   ]
]

])
@endsection
@section('content')
<div class="row">
@if(Session::has('saas_error'))
 <div class="col-sm-12">
   <div class="alert bg-gradient-danger text-white alert-dismissible fade show" role="alert">
     <span class="alert-icon"><i class="fi  fi-rs-info"></i></span>
     <span class="alert-text"><strong>{{ __('!Oops ') }}</strong> {{ Session::get('saas_error') }}</span>
     <button type="button" class="close" data-dismiss="alert" aria-label="{{ __('Close2') }}">
      <span aria-hidden="true">×</span>
    </button>
  </div>
</div>
@endif
	@foreach($plans as $plan)
	<div class="col-sm-4 text-center">
		<div class="card">
			<div class="card-body">
				<h2 class="pricing-green">{{ $plan->title }}</h2>
				<h1>{{ amount_format($plan->price) }}</h1>

				{{ $plan->days == 30 ? 'Per month' : 'Per year' }}

				<hr>
				@foreach($plan->limits ?? [] as $key => $data)
				<div class="mt-2 text-left">
					<i class="far {{$data=="no" || $data==false ? 'text-danger' : 'text-success' }} fa-check-circle"></i>
					<span class="{{$data == "no"|| $data =='0'? 'text-warning' : '' }}">
						{{ $data=="no" ||$data=="yes"  ? __($key) : __($key) . " : (".( $data == 'unlimited' ? __($data) .')' : $data.')') }}
			
						
					  </span>
				</div>
				@endforeach
				<hr>
				<a class="btn btn-block  btn-neutral" href="{{ route('user.subscription.show',$plan->id) }}">
						<i class="{{  Auth::user()->plan_id == $plan->id ? 'fa fa-check' : 'fa fa-plus-circle' }} " ></i>
				 	{{ Auth::user()->plan_id == $plan->id ? __('Activated') :  __('Subscribe') }}
				</a>
			</div>
		</div>
	</div>
	@endforeach
</div>
@endsection
