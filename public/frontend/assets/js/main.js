$(document).ready(function () {
    $(".navbar-toggler").click(function () {
        $('.light-mode-up').toggleClass('d-none');
        $('.light-mode-down').toggleClass('d-none');
      
        $('.search-icon-container').toggleClass('d-none');
        $('.navbar .line').toggleClass('d-none');
    });


    // if ($(window).width() <= 992) {
    //     $('.light-mode-up').toggleClass('d-none');
    //     $('.light-mode-down').toggleClass('d-none');
    //     $('.search-icon-container').toggleClass('d-none');
    //     $('.navbar .line').toggleClass('d-none');
  
    // }
});

