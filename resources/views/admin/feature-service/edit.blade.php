@extends('layouts.main.app')

@section('head')
@include('layouts.main.headersection', [
'title' => __('Edit Feature'),
'buttons' => [
    [
        'name' => __('Back'),
        'url' => route('admin.feature-service.index', $featureSlug),
    ]
]
])
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <strong>{{ __('Edit Feature Post') }}</strong>
        <p>{{ __('Update your feature details and necessary information here') }}</p>
    </div>
    <div class="col-12 mt-3">
        <div class="card">
            <div class="card-body">
         @include('admin.partions.session')
                <!-- Form should now target the update route with the PUT method -->
                <form action="{{ route('admin.feature-service.update', $featureService->slug) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Use PUT method for updating resources -->
                    
                   <input type="text" name="featureSlug" value="{{ $featureSlug }}" hidden>

                    <!-- Description Field -->
                    <div class="form-group row mt-2">
                        <label class="col-lg-12">Description</label>
                        <div class="col-lg-12">
                            <textarea name="description" required class="form-control h-100" maxlength="500">{{ old('description', $featureService->description) }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <!-- Preview Image Field -->
                    <div class="form-group row mt-2">
                        <label class="col-lg-12">{{ __('Preview Image') }}</label>
                        <div class="col-lg-12">
                            <input type="file" class="form-control" name="photo">
                            @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if ($featureService->photo)
                                <img src="{{ asset($featureService->photo) }}" class="img-fluid mt-2" alt="Current Image" width="100">
                            @endif
                        </div>
                    </div>
                    
                    <!-- Language Selection Field -->
                    <div class="form-group row mt-2">
                        <label class="col-lg-12">{{ __('Select Language') }}</label>
                        <div class="col-lg-12">
                            <select name="lang" class="form-control">
                                @foreach ($languages ?? [] as $languagesKey => $language)
                                    <option value="{{ $languagesKey }}" {{ $languagesKey == $featureService->lang ? 'selected' : '' }}> {{ $language }} </option>
                                @endforeach
                            </select>
                            @error('lang')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group row mt-2 d-flex justify-content-end mx-2">
                        <button type="submit" class="btn btn-neutral submit-button">{{ __('Update Now') }}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
