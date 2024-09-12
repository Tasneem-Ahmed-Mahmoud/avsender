@extends('frontend.inc.master')

@section('content')
    @include('frontend.inc.head', [
        'title' => __('Top Features'),
        'description' => __('Feature Description'),
    ])



    <div class="faq__content_container" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150" 
    data-aos-easing="linear">
        <div class="container">
            <div class="row faq__content_container_row mt-2 mb-4 justify-content-start">
                @foreach ($features as $feature)
           
                    <div class="col-md-4 col-sm-12 mt-4 Features-box-col-sm">
                        <a href="{{ route('frontend.feature.show', $feature->slug)}}">
                            <div class="Features-box">

                                <img src="{{ asset($feature->photo ?? '') }}" alt="imag-chat"
                                    class="features-image" />
                                <h3 class="Features-box_h3"> {{ Str::limit($feature->title, 20) }}</h3>
                                <p class="Features-box-p">{{ Str::limit($feature->description?? '', 100) }}</p>
                                <a href="{{ route('frontend.feature.show', $feature->slug)}}" class="Read_More"
                                    style="margin-top:auto;" >{{ __('READ MORE') }}
                                    <img src="{{ asset('frontend/assets') }}/images/ei_arrow-up.svg" class="mx-1"
                                        alt="arrow-up" />
                                </a>
                            </div>
                        </a>

                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
