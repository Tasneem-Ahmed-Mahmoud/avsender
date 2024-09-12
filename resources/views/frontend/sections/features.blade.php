@php
    $features = \App\Models\Feature::where('featured', 1)
        ->where('status', 1)
        ->latest()
        ->get();
@endphp







<div class="swiper-container feature-slider" >
    <div class="swiper-wrapper">

        @foreach ($features as $feature)
            <div class="swiper-slide">
                <div class="swiper-slide__content">
                    <img src="{{ asset($feature->photo ?? '') }}" alt="imag-chat" />
                    <a href="{{ route('frontend.feature.show', $feature->slug)}}">
                        <h3>{{ Str::limit($feature->title, 20) }}</h3>
                    </a>
                    <p>{{ Str::limit($feature->description ?? '', 90) }}.</p>

                    <div class="read-more ">
                        <a href="{{ route('frontend.feature.show', $feature->slug)}}">{{ __('READ MORE') }}</a>
                        <span> <i
                                class="fas {{ app()->getLocale() == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }}"></i></span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="swiper-slider-button">
        <div class="btn-swiper-button-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </div>
        <div class="btn-swiper-button-next">
            <i class="fa-solid fa-chevron-right"></i>
        </div>

    </div>

</div>
