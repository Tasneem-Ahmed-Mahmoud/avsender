@extends('layouts.main.app')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/plugins/select2/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}">
@endpush
@section('head')
@include('layouts.main.headersection',[
'title'=> __('Edit blog'),
'buttons'=>[
	[
		'name'=>__('Back'),
		'url'=>route('admin.blog.index'),
	]

  ]
])
@endsection
@section('content')
<form class="ajaxform_instant_reload" method="post" action="{{ route('admin.blog.update',$blog->slug) }}">
	@csrf
	@method('PUT')
    <div class="row justify-content-center">


        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="from-group row col-6">
                            <label class="col-lg-12">{{ __('Blog Title') }} (EN)</label>
                            <div class="col-lg-12">
                                <input type="text" name="title[en]" class="form-control"
                                    value="{{ old('title.en')??$blog->getTranslation('title','en') }}">
                            </div>
                            @include('admin.includes.error', ['property' => 'title.en'])
                        </div>

                        <div class="from-group row col-6">
                            <label class="col-lg-12">{{ __('Blog Title') }} (AR)</label>
                            <div class="col-lg-12">
                                <input type="text" name="title[ar]" class="form-control"
                                    value="{{ old('title.ar')??$blog->getTranslation('title','ar') }}">
                            </div>
                            @include('admin.includes.error', ['property' => 'title.ar'])
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="from-group row col-6">
                            <label class="col-lg-12">{{ __('Description') }} (EN)</label>
                            <div class="col-lg-12">
                                <textarea name="description[en]" class="form-control h-100"
                                    maxlength="500">{{ old('description.en')??$blog->getTranslation('description','en') }}</textarea>
                            </div>
                            @include('admin.includes.error', ['property' => 'description.en'])
                        </div>
                        <div class="from-group row col-6">
                            <label class="col-lg-12">{{ __('Description') }} (AR)</label>
                            <div class="col-lg-12">
                                <textarea name="description[ar]" class="form-control h-100"
                                    maxlength="500">{{ old('description.ar')??$blog->getTranslation('description','ar') }}</textarea>
                            </div>
                            @include('admin.includes.error', ['property' => 'description.ar'])
                        </div>
                    </div>

                    <div class="row">
                        <div class="from-group row col-12">
                            <label class="col-lg-12">{{ __('Content') }} (EN)</label>
                            <div class="col-lg-12">
                                <textarea name="content[en]" rows="40"
                                    class="summernote form-control">{!!  old('content.en')??$blog->getTranslation('content','en')!!}</textarea>
                            </div>
                            @include('admin.includes.error', ['property' => 'content.en'])
                        </div>
                        <div class="from-group row col-12">
                            <label class="col-lg-12">{{ __('Content') }} (AR)</label>
                            <div class="col-lg-12">
                                <textarea name="content[ar]" rows="40"
                                    class="summernote form-control">{!!  old('content.en')??$blog->getTranslation('content','ar')!!}</textarea>
                            </div>
                            @include('admin.includes.error', ['property' => 'content.ar'])
                        </div>
                    </div>

                   

                    <hr>
                    <div class="row">
                        
                        <div class="from-group row col-6">
                            <label class="col-lg-12">{{ __('Blog Image (Preview)') }}</label>
                            <div class="col-lg-12">
                                <input type="file" class="form-control" name="photo">
                            </div>
                            @if ($blog->photo)
                                <img src="{{ asset($blog->photo) }}" alt="blog" style="width: 50px;height: 40px">                                 
                            @endif
                            @include('admin.includes.error', ['property' => 'photo'])
                        </div>

                        <div class="from-group row col-6">
                            <label class="col-lg-12">{{ __('SEO Meta Title') }}</label>
                            <div class="col-lg-12">
                                <input type="text" name="meta_title" class="form-control"
                                    value="{{ old('meta_title')??$blog->meta->title }}">
                            </div>
                            @include('admin.includes.error', ['property' => 'meta_title'])
                        </div>
                        <div class="from-group row mt-2 col-12">
                            <label class="col-lg-12">{{ __('SEO Meta Description') }}</label>
                            <div class="col-lg-12">
                                <textarea name="meta_description"
                                    class="form-control h-100">{{ old('meta_description')??$blog->meta->description }}</textarea>
                            </div>
                            @include('admin.includes.error', ['property' => 'meta_description'])
                        </div>
                    </div>


                    <div class="row mt-5">

                        <div class="from-group row col-6">
                            <label class="col-lg-12">{{ __('SEO Meta Keywords') }}</label>
                            <div class="col-lg-12">
                                <input type="text" name="meta_keywords" class="form-control"
                                    value="{{ old('meta_keywords')??$blog->meta->keywords }}">
                            </div>
                            @include('admin.includes.error', ['property' => 'meta_keywords'])
                        </div>
                        <div class="from-group row  mt-2 col-6">
                            <label class="col-lg-12">{{ __('SEO Meta Image') }}</label>
                            <div class="col-lg-12">
                                <input type="file" class="form-control" name="meta_image" accept="image/*">
                            </div>
                            @if ($blog->meta->image)
                                <img src="{{ asset($blog->meta->image) }}" alt="blog" style="width: 30px;height: 30px">
                                
                            @endif
                            @include('admin.includes.error', ['property' => 'meta_image'])
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="from-group row  col-6">
                            <label  class="col-lg-12">{{ __('Select Category') }}</label>
                            <div class="col-lg-12">
                                <select name="categories[]" class="form-control select2" multiple="">
                                    @foreach ($categories ?? [] as  $category)
                                    <option value="{{ $category->id }}" @selected(in_array($category->id, $blog->categories->pluck('id')->toArray()))  > {{ $category->title }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="from-group row col-6">
                            <label  class="col-lg-12">{{ __('Select Tags') }}</label>
                            <div class="col-lg-12">
                                <select name="tags[]" class="form-control select2" multiple="">
                                    @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}"  @selected(in_array($tag->id, $blog->tags->pluck('id')->toArray())) > {{ $tag->title }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="from-group row  justify-content-between mt-5">
                        <div class="col-6 d-flex">

                            <label class="custom-toggle custom-toggle-primary">
                                <input type="checkbox" name="featured" value="1" id="plain-text-with-featured"
                                    data-target=".plain-title-with-featured" class="save-template"
                                    @checked($blog->featured)>
                                <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                    data-label-on="Yes"></span>
                            </label>
                            <label class="mt-1 ml-1" for="plain-text-with-featured">
                                <h4>{{ __('Make it featured?') }}</h4>
                            </label>


                        </div>
                        <div class="col-6 d-flex">
                            <label class="custom-toggle custom-toggle-primary">
                                <input type="checkbox" name="publish" value="1" id="plain-text-with-button"
                                    data-target=".plain-title-with-button" class="save-template"
                                    @checked($blog->publish)>
                                <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                    data-label-on="Yes"></span>
                            </label>
                            <label class="mt-1 ml-1" for="plain-text-with-button">
                                <h4>{{ __('Make it publish?') }}</h4>
                            </label>
                        </div>
                    </div>

                    <div class="from-group row mt-3">
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
@push('topjs')
<script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/summernote/summernote-bs4.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/summernote/summernote.js') }}"></script>
@endpush