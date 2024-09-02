@php
$features = \App\Models\Post::where('type','feature')
->where('featured',1)
->where('status',1)
->where('lang',app()->getLocale())
->with('preview','excerpt')
->latest()

->get();
@endphp







<div class="swiper-container feature-slider" style="overflow:hidden">
    <div class="swiper-wrapper">

        @foreach($features as $feature)
        <div class="swiper-slide">
            <div class="swiper-slide__content">
                <img src="{{ asset($feature->preview->value ?? '') }}" alt="imag-chat" />
                <a href="{{ url('feature/'.$feature->slug) }}">
                    <h3>{{ Str::limit($feature->title,20) }}</h3>
                </a>
                <p>{{ Str::limit($feature->excerpt->value ?? '',90) }}.</p>

                <div class="read-more ">
                    <a href="{{ url('feature/'.$feature->slug) }}">{{ __('READ MORE') }}</a>
                    <span> <i
                            class="fas {{ app()->getLocale() == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }}"></i></span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{-- <div class="swiper-slider-button ">
        <div class="btn-swiper-button-next">
            <img src="{{ asset('frontend/assets/images/features')}}/next.svg" alt="nex" />
        </div>
        <div class="btn-swiper-button-prev"> <img src="{{ asset('frontend/assets/images/features') }}/prev.svg"
                alt="nex" /></div>
    </div> --}}
    <div class="swiper-slider-button">
        <div class="btn-swiper-button-next">

            <i class="fa-solid fa-chevron-right"></i>

    </div>

    <div class="btn-swiper-button-prev">

        <i class="fa-solid fa-chevron-left"></i>

</div>
    </div>

</div>
