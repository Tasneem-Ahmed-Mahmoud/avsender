@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/faq.css') }}">
@endsection

@section('content')
@include('frontend.inc.head-2', ['title' => __('Top Features') ,'description' => __('Feature Description')])



<div class="faq__content_container">
    <div class="container">
        <div class="row faq__content_container_row mt-2 mb-4">
            @foreach($features as $feature)
            <div class="col-md-4 col-sm-12 mt-4 Features-box-col-sm">
                <a href="{{ url('feature/'.$feature->slug) }}">
                    <div class="Features-box">

                        <img src="{{ asset($feature->preview->value ?? '') }}" alt="imag-chat" class="features-image" />
                        <h3 class="Features-box_h3"> {{ Str::limit($feature->title,20) }}</h3>
                        <p class="Features-box-p">{{ Str::limit($feature->excerpt->value ?? '',100) }}</p>
                        <a href="{{ url('feature/'.$feature->slug) }}" class="Read_More">{{ __('READ MORE') }}
                            <img src="{{ asset('frontend/assets') }}/images/ei_arrow-up.svg" class="mx-1" alt="arrow-up" />
                        </a>
                    </div>
                </a>

            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection