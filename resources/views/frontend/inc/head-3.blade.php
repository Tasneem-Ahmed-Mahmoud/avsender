<!-- ################################## header ############################################### -->


<header class="hero-image-header">
    <div class="hero hero-with-img">
        <div class="container">
            <div class="row justify-content-center align-items-center hero-content">
   
                <h1 class=" text-center">{{ $title }}</h1>
                <p class="text-center">{{ $description }}</p>
                <button class=" btn btn-work-with-us text-center">{{ __('Work With Us') }}</button>

            </div>


            
        </div>
    </div>

   <div class="container">
    <div class="row justify-content-center">
        <figure class="img">
            <img src="{{ $image }}" alt="" class="w-100">
        </figure>
    </div>
   </div>
</header>