<nav class="navbar navbar-expand-lg {{ app()->getLocale() == 'ar' ? 'text-end' : 'text-start' }} ">
  <div class="container">
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>
    <a class="navbar-brand m-auto" href="{{ url('/') }}">
      <img src="{{ asset('frontend') }}/assets/images/logo.svg" alt="av-sender">
    </a>

    <div class="navbar-btn-container  d-flex justify-content-between navbar-btn-mobile  m-auto d-none ">
      <a class="navbar-btn-subscribe navbar-btn" href="{{ url('/pricing') }}">{{ __('Subscribe') }} </a>

      @guest
      <a class="navbar-btn-login navbar-btn" href="{{ url('/login') }}">{{ __('Login') }} </a>
      @endguest

    </div>

    <div class="collapse navbar-collapse m-auto " id="navbarSupportedContent">
      <div class="d-flex justify-content-lg-around     flex-lg-row flex-column  align-items-lg-center  w-100">

        <ul class="navbar-nav  mb-2 mb-lg-0 order-2  order-lg-1  mt-lg-0  me-0 {{ app()->getLocale() =="ar" ? "flex-lg-row-reverse flex-column-reverse" : "" }} ">

          {{ PrintMenu('main-menu') }}
        </ul>
        <ul class="navbar-nav  ms-0 mb-lg-0  order-3 order-lg-2 d-md-flex align-items-md-center ">
          <div class="d-none line"></div>
          <li class="nav-item dropdown lang-option {{ app()->getLocale() =="ar" ? "me-lg-0 me-md-5 me-4" : "" }} ">
            <a class="nav-link dropdown-toggle text-capitalize  " href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">

              <img src="{{ asset('frontend') }}/assets/images/{{ app()->getLocale()==" ar" ? "arabic" : "english"
                }}.png" alt="language" class="rounded-circle lang-icon  {{ app()->getLocale() =="ar" ? "me-4" : "" }}">
              <span>{{ app()->getLocale() =="ar" ? "عربي" : "English"}}</span>
            </a>
            <ul class="dropdown-menu {{ app()->getLocale() =="ar" ? " text-end " : "" }} r" aria-labelledby="navbarDropdown">
              @foreach(get_option('languages', true) as $code => $language)
              <li class="mb-1 p-1">
                <a class="dropdown-item d-flex align-items-center  lang" href="{{ route('switchLang', $code) }}">
                  @if($language === 'Arabic')
                  <img src="{{ asset('frontend') }}/assets/images/arabic.png" alt="Saudi Arabia Flag" class=" {{ app()->getLocale() =="ar" ? "ms-3" : "me-3" }}">
                  @else
                  <img src="{{ asset('frontend') }}/assets/images/english.png" alt="American Flag" class="{{ app()->getLocale() =="ar" ? "ms-3" : "me-3" }}">
                  @endif

                  <span >{{ $language }}</span>
                </a>
              </li>
              @endforeach
            </ul>
          </li>

        </ul>
        <div class="navbar-btn-container  d-flex justify-content-lg-between justify-content-center  order-lg-3 order-1">
          <a class=" navbar-btn-subscribe navbar-btn" href="{{ url('/pricing') }}">{{ __('Subscribe') }} <a>
              <a class="navbar-btn-login navbar-btn gradient-border " href="{{ route('login') }}">{{ __('Login') }}<a>
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- new navbar ------------------------------------------------------------- -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"> <img src="{{ asset('frontend') }}/assets/images/logo.svg" alt="av-sender"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto justify-content-evenly mb-2 mb-lg-0  {{ app()->getLocale() == 'ar' ? 'flex-lg-reverse' : '' }}">
      {{ PrintMenu('main-menu') }}
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>