@extends('frontend.inc.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/faq.css') }}">
@endsection

@section('content')
    @include('frontend.inc.head-2', ['title' => __('FAQ') ,'description' => __('We are here to help you')])
    <div class="faq_hero_container_section">
        <div class="container">
            <div class="faq__content_container">
                <div class="container">
                    <div class="row faq__content_container_row mt-2 mb-4">

                        @foreach($faqs as $key => $faq)

                            <div class="col-md-6 col-sm-12 mt-4">
                                <div class="faq_box_content">
                                    <div class="w-100 d-flex flex-column justify-content-between">

                                        <div class="d-flex justify-content-between align-items-center w-100">

                              <span class="faq_box_content-p" id="faqQuestion{{ $loop->iteration }}"> {{ $faq->title }}
                              </span>
                                            <div class="more-info-faq-div" id="more-info-faq-div">
                                                <img src="{{ asset('frontend/assets/images/faq')}}/more-info-faq.svg"
                                                     alt="more-info-faq" class="more-info-faq"
                                                     data-bs-toggle="collapse"
                                                     href="#collapseExample{{ $loop->iteration }}" role="button"
                                                     aria-expanded="false"
                                                     aria-controls="collapseExample{{ $loop->iteration }}"
                                                     id="toggleImage" />
                                            </div>
                                        </div>
                                        <div class="collapse" id="collapseExample{{ $loop->iteration }}"
                                             data-faq-target="faqQuestion{{ $loop->iteration }}">
                                            <div class="faq_box_content-p">
                                                <hr class="faq_box_content-hr" />
                                                {{ $faq->excerpt->value ?? '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach


                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script src="{{ asset('frontend/assets/js/faq.js') }}"></script>

@endsection
