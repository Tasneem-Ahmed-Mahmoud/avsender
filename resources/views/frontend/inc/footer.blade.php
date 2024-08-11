<!-- ################################## footer ############################################### -->
<footer class="footer ">
  <div class="container h-100">
    <div class="row h-100 justify-content-between  ">
      <div class=" col-md-6 col-xl-8 col-12 ">
        <div class="left-content">
          <figure>
            <img src="{{ asset('frontend') }}/assets/images/logo.svg" alt="" srcset="">
          </figure>
          <p>Unlock Your Brand’s Potential</p>
          <div class="social-icons d-flex justify-content-between align-items-center">

            @if(!empty(get_option('primary_data',true)->socials->twitter))
            <li> <a href="{{ get_option('primary_data',true)->socials->twitter }}"><i
                  class="fa-brands fa-x-twitter"></i></a> </li>
            @endif
            @if(!empty(get_option('primary_data',true)->socials->instagram))
            <li> <a href="{{ get_option('primary_data',true)->socials->instagram }}"><i
                  class="fa-brands fa-instagram"></i></a></li>
            @endif
            @if(!empty(get_option('primary_data',true)->socials->facebook))
            <li> <a href="{{ get_option('primary_data',true)->socials->facebook }}"><i
                  class="fa-brands fa-facebook"></i></a></li>
            @endif
            @if(!empty(get_option('primary_data',true)->socials->linkedin))
            <li> <a href="{{ get_option('primary_data',true)->socials->linkedin }}"><i
                  class="fa-brands fa-linkedin"></i></a></li>
            @endif

          </div>
        </div>
      </div>

      <div class=" col-xl-4 col-md-6 row mt-md-0 mt-4 justify-content-md-between  ">
        <div class="col-lg-6 col-md-4  col-sm-5 col-4 ">

          <div class="content ">
           
            <ul class="footer-links">
             
              <li><a class=" {{ url()->current() == url('/') ? 'active' : '' }} " href="/">Home</a></li>
              <li><a class=" {{ url()->current() == url('/features') ? 'active' : '' }} "
                  href="{{ url('/features') }}">{{ __('Features') }}</a></li>
              <li><a class=" {{ url()->current() == url('/about') ? 'active' : '' }} " href="{{ url('/about') }}">{{
                  __('About Us') }}</a></li>
              <li><a class=" {{ url()->current() == url('/pricing')  ? 'active' : '' }}" href="{{ url('/pricing') }}">{{
                  __('Pricing') }}</a></li>
              <li><a class=" {{ url()->current() ==  url('/faq')  ? 'active' : '' }} " href="{{ url('/faq') }}">{{
                  __('FAQ') }}</a></li>
              <li><a class=" {{ url()->current() == url('/blogs') ? 'active' : '' }}" href="{{ url('/blogs') }}">{{
                  __('News') }}</a></li>

            </ul>
          </div>
        </div>


        <div class="col-lg-6  col-md-8 col-sm-7 col-8   d-flex justify-content-end ">
          <div class="content">
            <ul class="footer-links contact-icons ">

              <li><a href="#" class="active">Contact</a></li>
              <li><a href="maito:{{ get_option('primary_data',true)->contact_email ?? '' }}" class="d-flex  g-2  "> <i
                    class="fa-solid fa-paper-plane "></i> <span>{{ get_option('primary_data',true)->contact_email ??
                    'info@avnology.com' }}</span></a></li>
              <li><a href="tel:{{ get_option('primary_data',true)->contact_phone ?? '' }}" class="d-flex g-2 "> <i
                    class="fa-solid fa-phone"></i> <span> {{ get_option('primary_data',true)->contact_phone ?? ''
                    }}</span></a></li>
              <li><a href="" class="d-flex  g-2  "><i class="fa-solid fa-location-dot"></i> <span>{{
                    get_option('primary_data',true)->address ?? '' }}</span></a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>

    <div class="row justify-content-center align-center ">
      <p class="copyright text-center"><span class="copyright-text-left">Ⓒ Designed by </span><img
          src="{{ asset('frontend') }}/assets/images/avnology.svg" class="copyright-logo" alt="avnology"> <span
          class="copyright-text-left">ALL RIGHTS RESERVED</span></p>
    </div>

  </div>
</footer>
<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- bootstrap -->
{{-- <script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- custom js -->
<script src="{{ asset('frontend') }}/assets/js/main.js"></script>
@yield('script')
</body>

</html>