@extends('layouts.main.app')
@section('head')
@include('layouts.main.headersection',[
'title'=> __('Create a feature'),
'buttons'=>[
[
'name'=>__('Back'),
'url'=>route('admin.features.index'),
]
]
])
@endsection
@section('content')
<form class="ajaxform_instant_reload" method="post" action="{{ route('admin.features.store') }}">
	@csrf
	<div class="row">
		<div class="col-lg-5">
			<strong>{{ __('Create a features post') }}</strong>
			<p>{{ __('Add your features details and necessary information from here') }}</p>
		</div>

		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="from-group row col-6">
							<label class="col-lg-12">{{ __('Features Title') }} (EN)</label>
							<div class="col-lg-12">
								<input type="text" name="title[en]" required="" class="form-control"
									value="{{ old('title.en')??'' }}">
							</div>
						</div>
						<div class="from-group row col-6">
							<label class="col-lg-12">{{ __('Features Title') }} (Ar)</label>
							<div class="col-lg-12">
								<input type="text" name="title[ar]" required="" class="form-control"
									value="{{ old('title.ar')??'' }}">
							</div>
						</div>
					</div>
					<div class="row mt-5">
						<div class="from-group row   col-6">
							<label class="col-lg-12">{{ __('Preview Image') }}</label>
							<div class="col-lg-12">
								<input type="file" class="form-control" required="" name="photo" accept="image/*">
							</div>
						</div>
						<div class="from-group row   col-6">
							<label class="col-lg-12">{{ __('Banner Image') }}</label>
							<div class="col-lg-12">
								<input type="file" class="form-control" required="" name="banner" accept="image/*">
							</div>
						</div>
					</div>
					<div class="row mt-5">
						<div class="from-group row  col-12">
							<label class="col-lg-12">{{ __('Short Description') }} (EN)</label>
							<div class="col-lg-12">
								<textarea name="description[en]" required="" class="form-control h-100"
									maxlength="500">{{ old('description.en')??'' }}</textarea>
							</div>
						</div>
						<div class="from-group row  col-12">
							<label class="col-lg-12">{{ __('Short Description') }} (AR)</label>
							<div class="col-lg-12">
								<textarea name="description[ar]" required="" class="form-control h-100"
									maxlength="500">{{ old('description.ar')??'' }}</textarea>
							</div>
						</div>
					</div>
					<div class="row mt-5">


						<div class="from-group row col-12">
							<label class="col-lg-12">{{ __('Main Description') }} (EN)</label>
							<div class="col-lg-12">
								<textarea name="content[en]" required=""
									class="h-200 form-control">{{ old('content.en')??'' }}</textarea>
							</div>
						</div>

						<div class="from-group row col-12">
							<label class="col-lg-12">{{ __('Main Description') }} (AR)</label>
							<div class="col-lg-12">
								<textarea name="content[ar]" required=""
									class="h-200 form-control">{{ old('content.ar')??'' }}</textarea>
							</div>
						</div>
					</div>


					<hr>
					<div class="row mt-5">


						<div class="from-group row col-6">
							<label class="col-lg-12">{{ __('SEO Meta Title') }}</label>
							<div class="col-lg-12">
								<input type="text" name="meta_title" class="form-control"
									value="{{ old('meta_title')??'' }}">
							</div>
							@include('admin.includes.error', ['property' => 'meta_title'])
						</div>
						<div class="from-group row  col-6">
							<label class="col-lg-12">{{ __('SEO Meta Description') }}</label>
							<div class="col-lg-12">
								<textarea name="meta_description"
									class="form-control h-100">{{ old('meta_description')??'' }}</textarea>
							</div>
							@include('admin.includes.error', ['property' => 'meta_description'])
						</div>
					</div>


					<div class="row mt-5">

						<div class="from-group row col-6">
							<label class="col-lg-12">{{ __('SEO Meta Keywords') }}</label>
							<div class="col-lg-12">
								<input type="text" name="meta_keywords" class="form-control"
									value="{{ old('meta_keywords')??'' }}">
							</div>
							@include('admin.includes.error', ['property' => 'meta_keywords'])
						</div>
						<div class="from-group row   col-6">
							<label class="col-lg-12">{{ __('SEO Meta Image') }}</label>
							<div class="col-lg-12">
								<input type="file" class="form-control" name="meta_image" accept="image/*">
							</div>
							@include('admin.includes.error', ['property' => 'meta_image'])
						</div>

					</div>
					<div class="from-group row mt-5 justify-content-between ">
						<div class="col-6 d-flex">
							<label class="custom-toggle custom-toggle-primary">
								<input type="checkbox" name="featured" value="1" id="plain-text-with-featured"
									data-target=".plain-title-with-featured" class="save-template">
								<span class="custom-toggle-slider rounded-circle" data-label-off="No"
									data-label-on="Yes"></span>
							</label>
							<label class="mt-1 ml-1" for="plain-text-with-featured">
								<h4>{{ __('Make it featured?') }}</h4>
							</label>
						</div>
						<div class="col-6 d-flex">
							<label class="custom-toggle custom-toggle-primary">
								<input type="checkbox" name="status" value="1" id="plain-text-with-button"
									data-target=".plain-title-with-button" class="save-template">
								<span class="custom-toggle-slider rounded-circle" data-label-off="No"
									data-label-on="Yes"></span>
							</label>
							<label class="mt-1 ml-1" for="plain-text-with-button">
								<h4>{{ __('Make it publish?') }}</h4>
							</label>
						</div>
						<div class="col-lg-12">
							<button class="btn btn-neutral submit-button">{{ __('Submit') }}</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection