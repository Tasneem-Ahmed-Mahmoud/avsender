<!-- ################################## header ############################################### -->

<header  class="hero  hero-with-button  d-flex justify-content-center align-items-center" >
    <div class="container ">
        <div class="row justify-content-center align-items-center hero-content">
   
            <h1 data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" 
            data-aos-easing="linear" class=" text-center">{{ $title }}</h1>
            <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="150" 
            data-aos-easing="linear"class="text-center">{{ $description }}</p>
            <a data-aos="zoom-in" data-aos-duration="500" data-aos-delay="200" 
            data-aos-easing="linear" href="{{ url('/about') }}" class=" btn btn-work-with-us text-center">{{ __('Work With Us') }}</a>

        </div>
    </div>
</header>
