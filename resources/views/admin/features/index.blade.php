@extends('layouts.main.app')
@section('head')
@include('layouts.main.headersection',[
'title'=> __('Features'),
'buttons'=>[
   [
      'name'=>'<i class="fa fa-plus"></i>&nbsp'.__('Create feature'),
      'url'=>route('admin.features.create'),
      
   ]
]

])
@endsection
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<!-- Card header -->
			<div class="card-header border-0">
				<h3 class="mb-0">{{ __('Our Features') }}</h3>
			</div>
			<!-- Light table -->
			<div class="table-responsive">
				<table class="table align-items-center table-flush">
					<thead class="thead-light">
						<tr>
							<th class="col-3">{{ __('Title') }}</th>
							<th class="col-6">{{ __('Description') }}</th>
                     <th class="col-6">Service</th>
                     <th class="col-6">Instruction</th>
							<th class="col-1 text-right">{{ __('Action') }}</th>
						</tr>
					</thead>					
						@foreach($features ?? [] as  $feature)
						<tr>
							<td class="text-left">
								<img src="{{ asset($feature->photo) }}" class="avatar rounded-circle mr-3">
								{{ Str::limit($feature->title,30) }}
							</td>
							<td class="text-left">
								{{ Str::limit($feature->description?? '',50) }}
							</td>
                     <td> <a href="{{ route('admin.feature-service.index',$feature->slug) }}" class="btn btn-neutral btn-sm">Services</a></td>
                     <td> <a href="{{ route('admin.feature-instruction.index',$feature->slug) }}" class="btn btn-neutral btn-sm">Instructions</a></td>
						
							<td class="text-right">
								<div class="btn-group mb-2 float-right">
									<button class="btn btn-neutral btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										{{ __('Action') }}
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item has-icon" href="{{ route('admin.features.edit',$feature->slug) }}" >
										<i class="fi fi-rs-edit"></i>{{ __('Edit') }}</a>

										
										<a class="dropdown-item has-icon delete-confirm" href="javascript:void(0)" data-action="{{ route('admin.features.destroy',$feature->slug) }}"><i class="fas fa-trash"></i>{{ __('Remove') }}</a>
									</div>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>				
			</div>

			<div class="card-footer py-4">
				{{ $features->links('vendor.pagination.bootstrap-5') }}
			</div>					
		</div>
	</div>
</div>





@endsection

@push('js')
<script src="{{ asset('assets/js/pages/admin/features.js') }}"></script>
@endpush