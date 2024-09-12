@extends('layouts.main.app')

@section('head')
@include('layouts.main.headersection',[
'title'=> __('Features'),
'buttons'=>[
   [
      'name'=>'<i class="fa fa-plus"></i>&nbsp create service',
      'url'=>route('admin.feature-service.create', $featureSlug),
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
                @include('admin.partions.session')
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th class="col-3">{{ __('Title') }}</th>
                            <th class="col-6">{{ __('Description') }}</th>
                            <th class="col-1 text-right">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($featureServices ?? [] as $service)
                        <tr>
                            <td class="text-left">
                                <img src="{{ asset($service->photo) }}" class="avatar rounded-circle mr-3">
                            </td>
                            <td class="text-left">
                                {{ $service->description }}
                            </td>
                           
                            <td class="text-right">
                                <div class="btn-group mb-2 float-right">
                                    <button class="btn btn-neutral btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ __('Action') }}
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item has-icon" href="{{ route('admin.feature-service.edit', ['featureService' => $service->slug]) }}">
                                            <i class="fi fi-rs-edit"></i>{{ __('Edit') }}
                                        </a>

                                        <a class="dropdown-item has-icon delete-confirm" href="javascript:void(0)" data-action="{{ route('admin.feature-service.destroy', ['featureService' => $service->slug]) }}">
                                            <i class="fas fa-trash"></i>{{ __('Remove') }}
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer py-4">
                {{ $featureServices->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection
