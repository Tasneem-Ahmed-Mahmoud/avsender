
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>


.notification-container {
  position: fixed;
  bottom: 20px; /* Adjust the distance from the bottom */
  left: 0;
  width: 100%;
  display: flex;
  justify-content: center;
  z-index: 999;
 
}

.notification {
  display: flex;
  align-items: center;
  padding: 10px;
  background-color: #4CAF50;
  color: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transform: translateY(100%);
  opacity: 0;
  transition: transform 0.5s, opacity 0.5s;
}

.icon-container {
  margin-right: 10px;
  font-size: 20px;

}

.icon-container i {
  animation: fadeIn 1s ease-out;

}

.message {
  font-size: 14px;
 
}

.notification.show {
  transform: translateY(0);
  opacity: 1;
}

@keyframes fadeIn {
  from {
	opacity: 0;
  }
  to {
	opacity: 1;
  }
}
</style>
@extends('layouts.main.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
 integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('head')
@include('layouts.main.headersection',[
'title'   => __('Schedule Message'),
'buttons' =>[
	[
	'name'=>'<i class="ni ni-calendar-grid-58"></i>&nbspCreate Schedule',
	'url'=> route('user.schedule-message.create'),
	]
]])
@endsection
@section('content')

<div class="row justify-content-center">
	<div class="col-12">
		<div class="row d-flex justify-content-between flex-wrap">
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 total-transfers">{{ number_format($totalSchedule ?? 0) }}</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="ni ni-calendar-grid-58 "></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0">{{ __('Total Schedules') }}</h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 total-transfers">{{ number_format($pendingSchedule ?? 0) }}</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-calendar-clock mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0">{{ __('Total Pending Schedules') }}</h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 completed-transfers">{{ number_format($deliveredSchedule?? 0)  }}</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-rocket-lunch mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0">{{ __('Schedules Executed') }}</h5>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-stats">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<span class="h2 font-weight-bold mb-0 pending-transfers">{{ number_format($failedSchedule ?? 0) }}</span>
							</div>
							<div class="col-auto">
								<div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
									<i class="fi fi-rs-calendar-xmark mt-2"></i>
								</div>
							</div>
						</div>
						<p class="mt-3 mb-0 text-sm">
						</p><h5 class="card-title  text-muted mb-0">{{ __('Failed Schedules') }}</h5>
						<p></p>
					</div>
				</div>
			</div>
		</div>
		@if(getUserPlanData('schedule_message') == false)
		<div class="row">
			<div class="col-sm-12">
				<div class="alert bg-gradient-primary text-white alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="fi  fi-rs-info text-white"></i></span>
					<span class="alert-text">
						<strong>{{ __('!Opps ') }}</strong> 

						{{ __('Schedule Message features is not available in your subscription plan') }}
						
					</span>
				</div>
			</div>
		</div>
		@endif

		@if(count($posts) > 0)
		<div class="card">
			
			<div class="card-body">
				<h3>{{ __('Schedules') }}</h3>
				<div class="row">
					<div class="col-sm-12 table-responsive">
						<table class="table col-12">
							<thead>
								<tr>
									<th class="col-3">{{ __('Send From') }}</th>
									<th class="col-4">{{ __('Title') }}</th>
									<th class="col-1">{{ __('Message Type') }}</th>
									<th class="col-1">{{ __('Status') }}</th>
									<th class="col-1">{{ __('Delivery Date') }}</th>
									<th class="col-2">{{ __('Action') }}</th>
								</tr>
							</thead>
							<tbody class="tbody">
								@foreach($posts as $post)
									<tr>
										<td>{{ $post->device->phone ?? '' }}</td>
										<td>{{ Str::limit($post->title ?? '',90)  }}</td>
										<td class="text-center">{{ $post->body !=  null ? 'Plain Text' : 'Template'  }}</td>
										<td><span class="badge {{ badge($post->status)['class'] }}">{{ $post->status }}</span></td>
										<td>{{ Carbon\Carbon::parse($post->schedule_at)->copy()->tz($post->zone)->format('F j, Y  g:i A')  }}</td>
										<td>
											<div class="btn-group mb-2">
												<button class="btn btn-neutral btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													{{ __('Action') }}
												</button>
												<div class="dropdown-menu">

													<a class="dropdown-item has-icon" href="{{ route('user.schedule-message.show',$post->id) }}"><i class="ni ni-align-left-2"></i>{{ __('View Log') }}</a>

													@if($post->status == 'pending')
													<a class="dropdown-item has-icon delete-confirm" href="javascript:void(0)" data-action="{{ route('user.schedule-message.destroy',$post->id) }}"><i class="ni ni-basket"></i>{{ __('Remove Schedule') }}</a>
													
													@endif
												</div>
											</div>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						<div class="d-flex justify-content-center">{{ $posts->links('vendor.pagination.bootstrap-4') }}</div>
					</div>
				</div>
			</div>
		</div>
		@else
		<div class="alert  bg-gradient-primary text-white"><span class="text-left">{{ __('Opps There Is No Schedules Found....') }}</span></div>
		@endif
	</div>
</div>


<div class="notification-container">
    <div class="notification">
   
      <div class="message">
	 
	  @if(app()->getLocale() == 'ar')
	  <i class="fas fa-check-circle  m-1  " ></i>
	  ! تم إصلاح    خدمة الرسائل المجدولة.  أفنولوجي سيندر  يتمنى لكم وقتًا سعيدًا 

	 
	   @else
	  
	   Scheduled messages service fixed. Avnology Sender wishes you a happy time!
	   <i class="fas fa-check-circle  m-1  " ></i>
	   @endif
      </div>
    </div>
  </div>

<input type="hidden" id="base_url" value="{{ url('/') }}">
<input type="hidden" id="bulk_message_link" value="{{ route('user.bulk-message.store') }}">
@csrf
@endsection
@push('js')
<script src="{{ asset('assets/js/pages/bulk/jquery.csv.min.js') }}" ></script>
<script src="{{ asset('assets/js/pages/bulk/bulkmessage.js') }}" ></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
      const notification = document.querySelector('.notification');

      // Function to show the notification
      function showNotification() {
        notification.classList.add('show');

        // Hide the notification after 3 seconds
        setTimeout(() => {
          notification.classList.remove('show');
        }, 7000);
      }

      // Trigger the notification on page load (for demonstration)
      showNotification();
    });
  </script>

@endpush