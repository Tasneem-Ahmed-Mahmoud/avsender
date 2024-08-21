




<header class="hero-image-header">
    <div class="continer-fluid hero-image-header-up">
        <div class="container">
            <div class="row">
                <div class="row justify-content-center align-items-center hero-content">
                    <h1 class="text-center">{{ $title }}</h1>
                    <p class="text-center w-md-75 w-100 ">{{$description}}</p>
                    <a href="{{ url('/about') }}" class="btn btn-work-with-us text-center">{{ __('Work With Us') }}</a>
                </div>
            </div>
        </div>
    </div>

    <figure class="hero-image-header-down d-flex justify-content-center align-items-center">
        <img src="{{ $image }}" alt="${ $title }">
    </figure>
</header>


