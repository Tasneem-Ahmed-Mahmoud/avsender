// document.addEventListener('DOMContentLoaded', function() {
//     var swiper = new Swiper('.swiper-container', {
//         slidesPerView: 1,
//         spaceBetween: 10,
//         pagination: {
//             el: '.swiper-pagination',
//             clickable: true,
//         },
//         navigation: {
//             nextEl: '.swiper-button-next',
//             prevEl: '.swiper-button-prev',
//         },
//         breakpoints: {
//             640: {
//                 slidesPerView: 1,
//                 spaceBetween: 20,
//             },
//             768: {
//                 slidesPerView: 2,
//                 spaceBetween: 30,
//             },
//             1024: {
//                 slidesPerView: 3,
//                 spaceBetween: 40,
//             },
//         },
//     });
// });



    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.btn-swiper-button-next',
            prevEl: '.btn-swiper-button-prev',
        },
        loop: true, // Enable infinite loop

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


    $(document).ready(function() {
        function toggleSwiperButtons() {
            if ($(window).width() <= 1200) {
                $('.swiper-slider-button').show();
            } else {
                $('.swiper-slider-button').hide();
            }
        }
    
        // Run the function on page load
        toggleSwiperButtons();
    
        // Run the function when the window is resized
        $(window).resize(function() {
            toggleSwiperButtons();
        });
    });
    