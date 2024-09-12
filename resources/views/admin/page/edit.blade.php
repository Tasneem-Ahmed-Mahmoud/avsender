@extends('layouts.main.app')
@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}">
@endpush
@section('head')
@include('layouts.main.headersection',[
'title'=> __('Edit Page'),
'buttons'=>[
	[
		'name'=>__('Back'),
		'url'=>route('admin.page.index'),
	]
]
])

@endsection
@section('content')
<form class="ajaxform_instant_reload" method="post" action="{{ route('admin.page.update',$page->slug) }}">
	@csrf
	@method('PUT')
	
	<div class="row justify-content-center">
		<div class="col-lg-10 card-wrapper">
			<!-- Alerts -->
			<div class="card">
				<div class="card-header">
					<h3 class="mb-0">{{ __('Create Custom Page') }}</h3>
				</div>
				<div class="card-body">
					<div class="row mt-2">
						<div class="form-group col-6">
							<label>{{ __('Page Title') }} (EN)</label>
							<input type="text" name="title[en]" required="" class="form-control" value="{{ old('title.en')??$page->getTranslation('title','en') }}">
							@include('admin.includes.error', ['property' => 'title.en'])
						</div>
						<div class="form-group col-6">
							<label>{{ __('Page Title') }} (EN)</label>
							<input type="text" name="title[ar]" required="" class="form-control" value="{{ old('title.ar')?? $page->getTranslation('title','ar') }}">
							@include('admin.includes.error', ['property' => 'title.ar'])
						</div>
					</div>
					<div class="row mt-5">
						<div class="form-group col-12">
							<label>{{ __('Page Description') }} (EN)</label>
							<textarea class="summernote" name="content[en]" required="">{!! old('content.en')??$page->getTranslation('content','en') !!}</textarea>
						</div>

						<div class="form-group col-12">
							<label>{{ __('Page Description') }} (AR)</label>
							<textarea class="summernote" name="content[ar]" required="">{!! old('content.ar')?? $page->getTranslation('content','ar') !!}</textarea>
						</div>
					</div>
					<hr>
                    <div class="row">
                       

                        

						<div class="from-group row col-12">
                            <label class="col-lg-12">{{ __('Meta Kewords') }}</label>
                            <div class="col-lg-12">
                                <input type="text" name="meta_keywords" class="form-control"
                                    value="{{ old('meta_keywords')?? $page->meta->keywords }}">
                            </div>
                            @include('admin.includes.error', ['property' => 'meta_keywords'])
                        </div>
                        <div class="from-group row mt-2 col-12">
                            <label class="col-lg-12">{{ __('SEO Meta Description') }}</label>
                            <div class="col-lg-12">
                                <textarea name="meta_description"
                                    class="form-control h-100">{{ old('meta_description')??$page->meta->description }}</textarea>
                            </div>
                            @include('admin.includes.error', ['property' => 'meta_description'])
                        </div>
                    </div>


                    <div class="row mt-5">
						<div class="from-group row col-6">
                            <label class="col-lg-12">{{ __('SEO Meta Title') }}</label>
                            <div class="col-lg-12">
                                <input type="text" name="meta_title" class="form-control"
                                    value="{{ old('meta_title')??$page->meta->title  }}">
                            </div>
                            @include('admin.includes.error', ['property' => 'meta_title'])
                        </div>
                       
                        <div class="from-group row  mt-2 col-6">
                            <label class="col-lg-12">{{ __('SEO Meta Image') }}</label>
                            <div class="col-lg-12">
                                <input type="file" class="form-control" name="meta_image" accept="image/*">
                            </div>
                            @include('admin.includes.error', ['property' => 'meta_image'])
                        </div>

                    </div>
                    
				
					<div class="row mt-5">


						<div class="from-group row  col-6">
                            <label  class="col-lg-12">{{ __('Select Page Type') }}</label>
                            <div class="col-lg-12">
                                <select name="type" class="form-control select2" >
                                    @foreach ($types  as  $type)
                                    <option value="{{ $type}}" @selected($type==$page->type)></option>> {{ $type }} </option>
                                    @endforeach
                                </select>
								@include('admin.includes.error', ['property' => 'type'])
                            </div>
                        </div>

						<div class="d-flex col-6
						">
							<label class="custom-toggle custom-toggle-primary">
								<input type="checkbox"  name="status"   @checked($page->status) value="1" id="plain-text-with-button"  data-target=".plain-title-with-button" class="save-template">
								<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
							</label>
							<label class="mt-1 ml-1" for="plain-text-with-button"><h4>{{ __('Make it publish?') }}</h4></label>
						</div>
					</div>
					<div class="from-group row mt-3">
						<div class="col-lg-12">
							<button class="btn btn-neutral submit-button">{{ __('Update') }}</button>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</form>
@endsection
@push('js')
<script  src="{{ asset('assets/plugins/summernote/summernote-bs4.js') }}"></script>
<script  src="{{ asset('assets/plugins/summernote/summernote.js') }}"></script>
@endpush