@if(app()->getLocale() =="ar")
<style>
  @media (max-width: 992px) {
 .navbar-nav {
    flex-direction: column-reverse !important;
  }
}
</style>
@endif
<!-- new navbar ------------------------------------------------------------- -->
<nav class="navbar navbar-expand-lg  ">
  <div class="container-fluid  d-flex   justify-content-between align-items center">
    <a class="navbar-brand " href="#"> <img src="{{ asset('frontend') }}/assets/images/logo.svg" alt="av-sender"></a>
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa-solid fa-bars  "></i>
    </button>
    <div class="collapse navbar-collapse  w-100  " id="navbarSupportedContent">

    <div class="  d-flex     action-btns action-btns-mobile ">
          <a class=" navbar-btn-subscribe navbar-btn" href="{{ url('/pricing') }}">{{ __('Subscribe') }} <a>
              <a class="navbar-btn-login navbar-btn" href="{{ route('login') }}">{{ __('Login') }} <a>
        </div>

      <ul class="navbar-nav  justify-content-evenly m-auto  {{ app()->getLocale() == 'ar' ? 'flex-lg-row-reverse ' : '' }}">
      @if(app()->getLocale() =="ar")
      <li class="nav-item dropdown lang-option {{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }} " >
            <a class="nav-link dropdown-toggle text-capitalize  " href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">

              <img src="{{ asset('frontend') }}/assets/images/{{ app()->getLocale()=='ar' ? 'arabic' : 'english'
                }}.png" alt="language" class="rounded-circle lang-icon">
              <span>{{ app()->getLocale() =="ar" ? "العربية" : "English"}}</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach(get_option('languages', true) as $code => $language)
              <li class="mb-1 p-1">
                <a class="dropdown-item d-flex align-items-center  lang" href="{{ route('switchLang', $code) }}">
                  @if($language === 'Arabic')
                  <img src="{{ asset('frontend') }}/assets/images/arabic.png" alt="Saudi Arabia Flag" class="me-3">
                  @else
                  <img src="{{ asset('frontend') }}/assets/images/english.png" alt="American Flag" class="me-3">
                  @endif

                  <span>{{ $language }}</span>
                </a>
              </li>
              @endforeach
            </ul>
          </li>
     
      {{ PrintMenu('main-menu') }}

      @else 
      {{ PrintMenu('main-menu') }}
      <li class="nav-item dropdown lang-option {{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }} " >
            <a class="nav-link dropdown-toggle text-capitalize  " href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">

              <img src="{{ asset('frontend') }}/assets/images/{{ app()->getLocale()==' ar' ? 'arabic' : 'english'
                }}.png" alt="language" class="rounded-circle lang-icon">
              <span>{{ app()->getLocale() =="ar" ? "العربية" : "English"}}</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach(get_option('languages', true) as $code => $language)
              <li class="mb-1 p-1">
                <a class="dropdown-item d-flex align-items-center  lang" href="{{ route('switchLang', $code) }}">
                  @if($language === 'Arabic')
                  <img src="{{ asset('frontend') }}/assets/images/arabic.png" alt="Saudi Arabia Flag" >
                  @else
                  <img src="{{ asset('frontend') }}/assets/images/english.png" alt="American Flag" >
                  @endif

                  <span>{{ $language }}</span>
                </a>
              </li>
              @endforeach
            </ul>
          </li>
      @endif

      <!-- <div class="lang-settings bg-info"> -->
 
        <!-- </div> -->

      </ul>
              </div>
   

      <div class="  d-flex  justify-content-end   action-btns action-btns-desktop">
          <a class=" navbar-btn-subscribe navbar-btn" href="{{ url('/pricing') }}">{{ __('Subscribe') }} <a>
              <a class="navbar-btn-login navbar-btn" href="{{ route('login') }}">{{ __('Login') }} <a>
        </div>
  
  </div>
</nav>