@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/terms-and-conditions.css') }}">
<style>
   .payment-method {
      /* margin-top: 50px; */
      margin-bottom: 50px;
   }

   .payment-method__accept-for {
      color: #29387E;

      font-size: 28px;
      font-weight: 600;
      line-height: 44.8px;


   }

   .payment-method figure img {
      height: 200px;
      width: 200px;

   }

   @media (max-width: 992px) {
      .payment-method {
      /* margin-top: 50px; */
      margin-bottom: 20px;
   }

   .payment-method__accept-for {
      color: #29387E;


font-size: 20px;

line-height: 32px;


   }
   .payment-method figure img {
      height: 150px;
      width: 150px;

   }

   }

   @media (max-width: 767px) {
      .payment-method figure img {
      height: 100px;
      width: 100px;

   }
   }
</style>
@endsection
@section('content')
@include('frontend.inc.head',["title"=>$page->title ,"description"=> ''])

<section class="terms-and-conditions">
   <div class="container">
      <div class="row">
         <header class="col-12">
            <h3 class="terms-and-conditions__title text-center">
               {{ $page->title }}
            </h3>
         </header>
         <div class="terms-and-conditions__body">
            {!! filterXss($page->description->value ?? '') !!}
         </div>

      </div>
   </div>
</section>
<section class="payment-method">
   <div class="container">
      <div class="row  align-items-center">
         <div class="col-md-3 col-12">
            <h2 class="payment-method__accept-for"> {{ __('Accept For') }}</h2>
         </div>
         <div class="col-md-3 col-4">
            <figure>
               <img src="{{ asset('frontend/assets/images/payment-method/Mada Logo .svg') }}" alt="Mada Logo ">
            </figure>
         </div>
         <div class="col-md-3 col-4">
            <figure>
               <img src="{{ asset('frontend/assets/images/payment-method/Mastercard Logo.svg') }}"
                  alt="Mastercard Logo ">
            </figure>
         </div>
         <div class="col-md-3 col-4">
            <figure>
               <img src="{{ asset('frontend/assets/images/payment-method/Visa Logo.svg') }}" alt="Visa Logo">
            </figure>
         </div>
      </div>
   </div>

</section>

@endsection

@section('script')
<script>
   document.addEventListener('DOMContentLoaded', function() {
        // Select all elements within .blog-content
        const blogContent = document.querySelector('.terms-and-conditions__body');
        
        if (blogContent) {
            // Remove all inline styles
            const elementsWithStyle = blogContent.querySelectorAll('[style]');
            elementsWithStyle.forEach(el => el.removeAttribute('style'));
 // Remove all class and color attributes
 const allElements = blogContent.querySelectorAll('*');
            allElements.forEach(el => {
               //  el.removeAttribute('class');
                el.removeAttribute('color');
            });
           
            
        }
    });

	


</script>
@endsection