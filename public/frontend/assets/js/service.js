



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
        // loop: true, // Enable infinite loop

        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1300: {
                slidesPerView: 4,
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
    

    // $(function() {
    //     if (!$('.btn-swiper-button-next').hasClass('swiper-button-disabled')) {
    //         $('.btn-swiper-button-next').addClass('active-btn-slider');
    //     } else if (!$('.btn-swiper-button-prev').hasClass('swiper-button-disabled')) {
    //         $('.btn-swiper-button-prev').addClass('active-btn-slider');
    //     }
    // });
    

    // $(document).ready(function() {
    //     function toggleSwiperButtons() {
    //         if ($(window).width() <= 1200) {
    //             $('.swiper-slider-button').show();
    //         } else {
    //             $('.swiper-slider-button').hide();
    //         }
    //     }
    
    //     // Run the function on page load
    //     toggleSwiperButtons();
    
    //     // Run the function when the window is resized
    //     $(window).resize(function() {
    //         toggleSwiperButtons();
    //     });
    
    //     // Function to toggle active class and handle disabled state
    //     function handleButtonClick(button, otherButton) {
    //         // Remove active class if the button is disabled
    //         if (button.hasClass('swiper-button-disabled')) {
    //             button.removeClass('active-btn-slider');
    //         } else {
    //             button.addClass('active-btn-slider');
    //             otherButton.removeClass('active-btn-slider');
    //         }
    //     }
    
    //     // Attach click events to the buttons
    //     $('.btn-swiper-button-next').click(function() {
    //         handleButtonClick($(this), $('.btn-swiper-button-prev'));
    //     });
    
    //     $('.btn-swiper-button-prev').click(function() {
    //         handleButtonClick($(this), $('.btn-swiper-button-next'));
    //     });
    
    //     // Check if the buttons are disabled and remove active class accordingly
    //     function checkDisabledState() {
    //         if ($('.btn-swiper-button-next').hasClass('swiper-button-disabled')) {
    //             $('.btn-swiper-button-next').removeClass('active-btn-slider');
    //         }
    //         if ($('.btn-swiper-button-prev').hasClass('swiper-button-disabled')) {
    //             $('.btn-swiper-button-prev').removeClass('active-btn-slider');
    //         }
    //     }
    
    //     // Run the check on page load and on swiper events
    //     checkDisabledState();
    //     $('.swiper-container').on('slideChange', checkDisabledState);
    // });
    