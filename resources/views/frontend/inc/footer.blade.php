  <!-- ################################## footer ############################################### -->
  <footer class="footer ">
    <div class="container h-100">
      <div class="row h-100 justify-content-between  ">
        <div class="col-12 col-md-6 col-xl-8 ">
          <div class="left-content">
             <figure>
              <img src="{{ asset('frontend') }}/assets/images/logo.svg" alt="" srcset="">
             </figure>
             <p>Unlock Your Brand’s Potential</p>
             <div class="social-icons d-flex justify-content-between align-items-center">
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-snapchat"></i></a>
         
            <a href=""><i class="fa-brands fa-x-twitter"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-tiktok"></i></a>

             </div>
          </div>
         </div>

        <div class=" col-xl-4 col-md-6 row mt-md-0 mt-4 justify-content-md-between ">
          <div class="col-lg-6 col-md-4  col-sm-5 col-4  ">
            <div class="content ">
              <ul class="footer-links">
                <li ><a href="" class="active">Home</a></li>
                <li ><a href="">About</a></li>
                <li ><a href="">Features</a></li>
                <li ><a href="">Pricing</a></li>
                <li ><a href="">Blog</a></li>
                <li ><a href="">Help</a></li>
             
              </ul>
              </div>
           </div>
  
  
           <div class="col-lg-6  col-md-8 col-sm-7 col-8   d-flex justify-content-end " >
            <div class="content">
              <ul class="footer-links contact-icons ">
              
                <li ><a href="" class="active">Contact</a></li>
                <li ><a href=""  class="d-flex  g-2  "> <i class="fa-solid fa-paper-plane "></i> <span>info@avnology.com</span></a></li>
                <li ><a href=""  class="d-flex g-2 "> <i class="fa-solid fa-phone"></i> <span> +966 555466532</span></a></li>
                <li ><a href=""  class="d-flex  g-2  "><i class="fa-solid fa-location-dot"></i> <span>Jeddah , Saudi Arabia</span></a></li>
              </ul>
              </div>
           </div>
        </div>

      </div>

<div class="row justify-content-center align-center ">

  <p class="copyright text-center"><span class="copyright-text-left">Ⓒ Designed by </span><img src="{{ asset('frontend') }}/assets/images/avnology.svg" class="copyright-logo" alt="avnology">  <span class="copyright-text-left">ALL RIGHTS RESERVED</span></p>
</div>

    </div>
   </footer>
   <!-- jquery -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- bootstrap -->
  <script  src = "{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
  <!-- custom js -->
  <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
  @yield('script')
</body>

</html>