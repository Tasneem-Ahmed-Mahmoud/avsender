 <!-- ################################## navbar ############################################### -->

 <nav class="navbar navbar-expand-lg ">
    <div class="container  ">
   
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>
      <a class="navbar-brand m-auto" href="#">
        <img src="{{ asset('frontend') }}/assets/images/logo.svg" alt="av-sender" >
      </a>
      {{-- <a class=" light-mode-up text-capitalize d-none" href="#"><img src="{{ asset('frontend') }}/assets/images/lamp.svg" alt="" srcset=""></a> --}}
      <div class="navbar-btn-container  d-flex justify-content-between navbar-btn-mobile  m-auto d-none ">
        <a class=" navbar-btn-subscribe navbar-btn" href="">Subscribe <a>
          <a class="navbar-btn-login navbar-btn" href="">Login <a>
      </div>
     
      
      <div class="collapse navbar-collapse m-auto " id="navbarSupportedContent">
       <div class="d-flex justify-content-lg-around     flex-lg-row flex-column  align-items-lg-center bg-danger w-100">
        <ul class="navbar-nav  mb-2 mb-lg-0 order-2  order-lg-1  mt-lg-0 bg-info me-0 ">
          {{ PrintMenu('main-menu') }}
        </ul>
        <ul class="navbar-nav  ms-0 mb-lg-0  order-3 order-lg-2 d-md-flex align-items-md-center bg-primary ">
         <hr class="d-none line">
          <li class="nav-item dropdown lang-option">
            <a class="nav-link dropdown-toggle text-capitalize  " href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
             <img src="https://cdn-icons-png.freepik.com/256/412/412828.png?ga=GA1.1.648065521.1707407535&semt=ais" alt="language" class="rounded-circle lang-icon">
             <span>English</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item d-flex align-items-center  lang" href="#"> <img src="{{ asset('frontend') }}/assets/images/english.png" alt="" class="me-3"><span>English</span></a></li>
              <li><a class="dropdown-item d-flex align-items-center  lang" href="#"><img src="{{ asset('frontend') }}/assets/images/arabic.png" alt="" class="me-3"><span>Arabic</span></a></li>
             
                
            </ul>
          </li>
          
        </ul>
        <div class="navbar-btn-container  d-flex justify-content-lg-between justify-content-center  order-lg-3 order-1">
          <a class=" navbar-btn-subscribe navbar-btn" href="">Subscribe <a>
            <a class="navbar-btn-login navbar-btn" href="">Login <a>
        </div>
       </div>
      </div>
      
     
      
        {{-- <a class=" light-mode-down text-capitalize" href="#"><img src="{{ asset('frontend') }}/assets/images/lamp.svg" alt="" srcset=""></a>
        --}}
      </div>
     
    

   
  </nav>