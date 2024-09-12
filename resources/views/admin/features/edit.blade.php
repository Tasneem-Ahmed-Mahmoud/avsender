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
@include('admin.includes.message',['type'=>"error",'alert'=>"danger"])
<form  method="post" action="{{ route('admin.features.update',$feature->slug) }}" enctype="multipart/form-data">
	@csrf
	@method("PUT")
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
								<input type="text" name="title[en]"  class="form-control"
									value="{{ old('title.en')?? $feature->getTranslation('title', 'en') }}">
									@include('admin.includes.error', ['property' => 'title.en'])
							</div>
						</div>
						<div class="from-group row col-6">
							<label class="col-lg-12">{{ __('Features Title') }} (Ar)</label>
							<div class="col-lg-12">
								<input type="text" name="title[ar]"  class="form-control"
									value="{{ old('title.ar')??$feature->getTranslation('title', 'ar')}}">
									@include('admin.includes.error', ['property' => 'title.ar'])
							</div>
						</div>
					</div>
					<div class="row mt-5">
						<div class="from-group row   col-6">
							<label class="col-lg-12">{{ __('Preview Image') }}</label>
							<div class="col-lg-12">
								<input type="file" class="form-control"  name="photo" >
								@include('admin.includes.error', ['property' => 'photo'])
							</div>
							@if ($feature->photo)
                            <img src="{{ asset($feature->photo) }}" alt="blog" style="width: 50px;height: 50px">                                 
                        @endif
						</div>
						<div class="from-group row   col-6">
							<label class="col-lg-12">{{ __('Banner Image') }}</label>
							<div class="col-lg-12">
								<input type="file" class="form-control"  name="banner" >
								@include('admin.includes.error', ['property' => 'banner'])
							</div>
							@if ($feature->banner)
                            <img src="{{ asset($feature->banner) }}" alt="blog" style="width: 50px;height: 50px">                                 
                        @endif
						</div>
					</div>
					<div class="row mt-5">
						<div class="from-group row  col-12">
							<label class="col-lg-12">{{ __('Short Description') }} (EN)</label>
							<div class="col-lg-12">
								<textarea name="description[en]"  class="form-control h-100"
									maxlength="500">{{ old('description.en')??$feature->getTranslation('description', 'en')}}</textarea>
							</div>
							@include('admin.includes.error', ['property' => 'description.en'])
						</div>
						<div class="from-group row  col-12">
							<label class="col-lg-12">{{ __('Short Description') }} (AR)</label>
							<div class="col-lg-12">
								<textarea name="description[ar]"  class="form-control h-100"
									maxlength="500">{{ old('description.ar')??$feature->getTranslation('description', 'ar') }}</textarea>
							</div>
							@include('admin.includes.error', ['property' => 'description.ar'])
						</div>
					</div>
					<div class="row mt-5">


						<div class="from-group row col-12">
							<label class="col-lg-12">{{ __('Main Description') }} (EN)</label>
							<div class="col-lg-12">
								<textarea name="content[en]" 
									class="h-200 form-control">{{ old('content.en')??$feature->getTranslation('content', 'en') }}</textarea>
							</div>
							@include('admin.includes.error', ['property' => 'content.en'])
						</div>

						<div class="from-group row col-12">
							<label class="col-lg-12">{{ __('Main Description') }} (AR)</label>
							<div class="col-lg-12">
								<textarea name="content[ar]" 
									class="h-200 form-control">{{ old('content.ar')??$feature->getTranslation('content', 'ar') }}</textarea>
							</div>
							@include('admin.includes.error', ['property' => 'content.ar'])
						</div>
					</div>


					<hr>
					<div class="row mt-5">


						<div class="from-group row col-6">
							<label class="col-lg-12">{{ __('SEO Meta Title') }}</label>
							<div class="col-lg-12">
								<input type="text" name="meta_title" class="form-control"
									value="{{ old('meta_title')??$feature->meta->title}}">
							</div>
							@include('admin.includes.error', ['property' => 'meta_title'])
						</div>
						<div class="from-group row  col-6">
							<label class="col-lg-12">{{ __('SEO Meta Description') }}</label>
							<div class="col-lg-12">
								<textarea name="meta_description"
									class="form-control h-100">{{ old('meta_description')??$feature->meta->description }}</textarea>
							</div>
							@include('admin.includes.error', ['property' => 'meta_description'])
						</div>
					</div>


					<div class="row mt-5">

						<div class="from-group row col-6">
							<label class="col-lg-12">{{ __('SEO Meta Keywords') }}</label>
							<div class="col-lg-12">
								<input type="text" name="meta_keywords" class="form-control"
									value="{{ old('meta_keywords')?? $feature->meta->keywords }}">
							</div>
							@include('admin.includes.error', ['property' => 'meta_keywords'])
						</div>
						<div class="from-group row   col-6">
							<label class="col-lg-12">{{ __('SEO Meta Image') }}</label>
							<div class="col-lg-12">
								<input type="file" class="form-control" name="meta_image" accept="image/*">
							</div>
							@if ($feature->meta->image)
                            <img src="{{ asset($feature->meta->image) }}" alt="blog" style="width: 50px;height: 50px">                                 
                        @endif
							@include('admin.includes.error', ['property' => 'meta_image'])
						</div>

					</div>
					<div class="from-group row mt-5 justify-content-between ">
						<div class="col-6 d-flex">
							<label class="custom-toggle custom-toggle-primary">
								<input  @checked($feature->featured) type="checkbox" name="featured" value="1" id="plain-text-with-featured"
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
								<input  @checked($feature->status) type="checkbox" name="status" value="1" id="plain-text-with-button"
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
