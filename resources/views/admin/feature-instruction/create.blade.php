@extends('layouts.main.app')
@section('head')
@include('layouts.main.headersection',[
'title'=> __('Create a feature'),
'buttons'=>[
[
'name'=>__('Back'),
'url'=>route('admin.feature-instruction.index',$featureSlug),
]
]
])
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <strong>{{ __('Create a features post') }}</strong>
            <p>{{ __('Add your features details and necessary information from here') }}</p>
        </div>
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.feature-instruction.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="featureSlug" id="" hidden value="{{ $featureSlug }}">
                       <div class="row mt-2">
                        <div class="from-group row">
                            <label class="col-lg-12">Instruction(EN)</label>
                            <div class="col-lg-12">
                                <textarea name="instruction[en]" required="" class="form-control h-100"
                                    maxlength="500">{{ old('instruction.en') ?? '' }}</textarea>

                                  @error('instruction.en')
                                      <span class="text-danger">{{ $message }}</span>
                                      
                                  @enderror
                            </div>
                        </div>
                        <div class="from-group row">
                            <label class="col-lg-12">Instruction(AR)</label>
                            <div class="col-lg-12">
                                <textarea name="instruction[ar]" required="" class="form-control h-100"
                                    maxlength="500">{{ old('instruction.ar') ?? '' }}</textarea>

                                  @error('instruction.ar')
                                      <span class="text-danger">{{ $message }}</span>
                                      
                                  @enderror
                            </div>
                        </div>
                       </div>
                        <div class="from-group row  mt-2">
                            <label class="col-lg-12">{{ __('Preview Image') }}</label>
                            <div class="col-lg-12">
                                <input type="file" class="form-control" required="" name="photo">

                                  @error('photo')
                                      <span class="text-danger">{{ $message }}</span>
                                      
                                  @enderror

                            </div>
                        </div>
                        

                        <div class="from-group row mt-2 d-flex justify-content-end mx-2">

                            <button type="submit" class="btn btn-neutral  submit-button">{{ __('Create Now') }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection