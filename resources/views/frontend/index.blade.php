
@extends('frontend.inc.master')
@section('style')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection
@section('content')

<div class="faq_hero_container_section ">

    <div class="row  hero-image-Services-col social-media-parent">
        <div class="col-12 hero_container   home-hero-section">
            <div class="hero-home-contenet">
                <h3 class="hero_h3 hero-home-content-h3">Boost your marketing with
                    <br>
                    AVSENDER on WhatsApp !
                </h3>
                <P class="hero_p ">Reach and engage your target audience more effectively.</P>
                <a href="#">
                    <button class="btn btn-button-hero">Work With Us</button>
                </a>
            </div>


        </div>
        <div class="col-10   hero-image-home">

            <img alt="hero-image-Services" src="{{ asset('frontend/assets/images/home') }}/hero-image-statistic.svg" />

        </div>
        <div class="col-10  d-flex justify-content-center   hero-image-home-Trusted">

            <img alt="hero-image-Services" src="{{ asset('frontend/assets/images/home') }}/Trusted.svg" />

        </div>
        <div class="social-media-hero">
            <div class="social-media-icon">
                <a href="https://wa.me/966555466532" target="_blank">
                    <img src="{{ asset('frontend/assets/images/home') }}/whats-app-hero.svg" alt="WhatsApp Icon" />
                </a>
            </div>
            <div class="social-media-icon">
                <a href="https://avnology.com" target="_blank"><img
                        src="{{ asset('frontend/assets/images/home') }}/google-hero.svg" alt="google" /></a>
            </div>
            <div class="social-media-icon">
                <a href="https://www.instagram.com/avnologysender/" target="_blank"> <img
                        src="{{ asset('frontend/assets/images/home') }}/insta-hero.svg" alt="insta" /></a>
            </div>
        </div>
    </div>


    <div class="content_container_cards  pb-5 ">
        <div class="container">
            <div class="Our-Features-h3-text">
                <img alt="text-bg" src="{{ asset('frontend/assets/images/home') }}/Features-bg-image.svg" />
            </div>
            <h3 class="Our-Features-h3">Our Features</h3>
            <p class="Our-Features-p">Avsender is an efficient and effective way to boost customer support and boost
                your company's performance.</p>

            @include('frontend.sections.features')
            <div class="row  whats-app">
                <div class="col-md-7 d-flex align-items-center  whats-app-col-7">
                    <div>
                        <div class="Our-whats-h3">
                            <div class="WhatsApp-Chatbot-text">
                                <img alt="text-bg" src="{{ asset('frontend/assets/images/home') }}/WhatsApp-Chatbot.svg" />
                            </div>
                            <h3 class="Our-whats-h3">WhatsApp Chatbot</h3>
                        </div>

                        <p class="Our-Features-p Our-WhatsApp-p">The WhatsApp bot can work around the clock and can
                            handle multiple
                            requests at once, which means it is always available to help customers, even outside
                            normal
                            business hours.</p>
                        <div class="btn-center-whats">
                            <button class="btn btn-create-whats-app">Lets Create WhatsApp Bot</button>
                        </div>

                    </div>


                </div>
                <div class="col-md-4">
                    <div class="Our-whats-h3-sm d-flex justify-content-center">
                        <div>
                            <div class="WhatsApp-Chatbot-text WhatsApp-Chatbot-text-sm">
                                <img alt="text-bg" src="{{ asset('frontend/assets/images/home') }}/WhatsApp-Chatbot.svg" />
                            </div>
                           
                            <h3 class="Our-whats-h3-sm">WhatsApp Chatbot</h3>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('frontend/assets/images/home') }}/whats-section.svg" alt=" whats-section " class="whats-section" />

                    </div>
                </div>
            </div>

          <div class="container">
            <div class="row iPhone_2-row">
                <div class="col-md-4 iPhone_2-col">
                    <div class="iPhone_2_div ">
                        <img src="{{ asset('frontend/assets/images/home') }}/iPhone_2.svg" alt="iPhone_2" />
                    </div>
                </div>
                <div class="col-md-8">
                    <div>
                        <div class="Our-iphon-h3">

                            <h3 class="Our-iphon-h3">AVSender for the WhatsApp ultimate
                                marketing tool ! </h3>
                        </div>

                        <p class="Our-Features-p Our-WhatsApp-p">The WhatsApp bot can work around the clock and can
                            handle multiple requests at once, which means it is always available to help customers,
                            even outside normal business hours.</p>
                        <div class="btn-center-whats">
                            <button class="btn btn-create-whats-app btn-iphone">Start Using Avsender</button>
                        </div>
                        <div class="row home-box-row">
                            <div class="col-md-6 col-sm-12 mt-4 Features-box-col-sm ChatBot-left">
                                <img src="{{ asset('frontend/assets/images/home') }}/ChatBot-left.svg" alt="ChatBot-left" />
                                <div class="home-box ChatBot-left-box">

                                    <h3 class="Features-box_h3 home-box-h3">Direct activation</h3>
                                    <p class="Features-box-p Features-box-p-home home-box-p">After payment, the
                                        platform will be activated immediately for customers, allowing them to
                                        benefit from the services provided by Avnology Sender.</p>

                                </div>


                            </div>
                            <div class="col-md-6 col-sm-12 mt-4 Features-box-col-sm ChatBot-right">
                                <div class="d-flex justify-content-end">
                                    <img src="{{ asset('frontend/assets/images/home') }}/ChatBot-right.svg" alt="ChatBot-left" />
                                </div>

                                <div class="home-box ChatBot-left-right">

                                    <h3 class="Features-box_h3 home-box-h3"> Facing any problem & can’t
                                        find solution ?</h3>
                                    <p class="Features-box-p Features-box-p-home home-box-p">Customer service is
                                        available 24/7. You can send an email to avsender@avnology.com.</p>

                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
          </div>
        
            <div class="container ">
                <div class="row d-flex justify-content-center ">
                    <div class="col-md-10 section-white col-sm-10">
                <div class="div-white-flex">
                    <div class="div-mb">
                    <div class="div-white-flex-img">
                
                <img src="{{ asset('frontend/assets/images/home') }}/user-icon.svg" alt="icon"/>
                    </div>
                    </div>
                    <div class=" div-white-flex-content">
                <h2 class="number-icon">76</h2>
                <p class="para-icon">Active Users</p>
                    </div>
                </div>
                <div class="div-white-flex">
                    <div class="div-mb">
                      <div class="div-white-flex-img">
                
                <img src="{{ asset('frontend/assets/images/home') }}/user-icon-stars.svg" alt="icon"/>
                    </div>    
                    </div>
                  
                    <div class=" div-white-flex-content">
                <h2 class="number-icon">109</h2>
                <p class="para-icon">Positive Reviews</p>
                    </div>
                </div>
                <div class="div-white-flex">
                    <div class="div-mb">
                    <div class="div-white-flex-img">
                <img src="{{ asset('frontend/assets/images/home') }}/user-icon-starsphone.svg" alt="icon"/>
                    </div>
                    </div>
                    <div class=" div-white-flex-content div-white-flex-last-child">
                <h2 class="number-icon">132</h2>
                <p class="para-icon">Total Customers</p>
                    </div>
                </div>
                    </div>
                </div>
                </div>  
            <div class="row Our_Top_Integrations-row ">

                <div class="col-md-6 ">
                    <div>
                        <div class=" Our_Top_Integrations-flex">
                            <div class="">
                                <div class="WhatsApp-Chatbot-text">
                                    <img alt="text-bg" src="{{ asset('frontend/assets/images/home') }}/Our_Top_Integrations.svg" />
                                </div>
                                <h3 class="Our-whats-h3">Our Top Integrations </h3>
                                <h3 class="Our-whats-h3-sm Our_Top_Integrations">Our Top Integrations </h3>
                            </div>
                        </div>
                        <p class="Our-Features-p Our-WhatsApp-p Our-Ipsum-p">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-md-6 iPhone_2-col Image-section-col">
                    <div class="Image-section ">
                        <img src="{{ asset('frontend/assets/images/home') }}/Image-section.svg" alt="iPhone_2" />
                    </div>
                </div>
            </div>

        </div>




    </div>

    @include('frontend.sections.faq', ['faqs' => $faqs])



</div>
@endsection



@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
       const toggleImages = document.querySelectorAll('.more-info-faq');

       toggleImages.forEach(toggleImage => {
           const targetId = toggleImage.getAttribute('href').substring(1);
           const faqQuestionId = document.getElementById(targetId).getAttribute('data-faq-target');
           const collapseExample = document.getElementById(targetId);
           const moreinfofaqdiv = document.getElementById('more-info-faq-div');

           collapseExample.addEventListener('shown.bs.collapse', function () {
               toggleImage.src = 'frontend/assets/images/faq/less-info-faq.svg';
               document.getElementById(faqQuestionId).style.color = '#29387E';
               document.getElementById(faqQuestionId).style.fontWeight = '500px';
               document.getElementById(moreinfofaqdiv).style.alignItems = 'start';
           });

           collapseExample.addEventListener('hidden.bs.collapse', function () {
               toggleImage.src = 'frontend/assets/images/faq/more-info-faq.svg';
               document.getElementById(faqQuestionId).style.color = '';
               document.getElementById(faqQuestionId).style.fontWeight = '400px';
           });
       });
   });
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
       slidesPerView: 1,
       spaceBetween: 10,
       pagination: {
           el: '.swiper-pagination',
           clickable: true,
       },
       navigation: {
           nextEl: '.swiper-button-next',
           prevEl: '.swiper-button-prev',
       },
       breakpoints: {
           640: {
               slidesPerView: 1,
               spaceBetween: 20,
           },
           768: {
               slidesPerView: 2,
               spaceBetween: 30,
           },
           1024: {
               slidesPerView: 3,
               spaceBetween: 40,
           },
       },
   });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
            },
        });
    });
</script>
@endsection

