
$(document).ready(function () {
    $(".navbar-toggler").click(function () {
   
        $('.navbar .line').toggleClass('d-none');
    });
});


 // Show the loader
 function showLoader() {
    document.getElementById('loader-container').style.display = 'flex';
    document.body.classList.remove('loaded');
}

// Hide the loader
function hideLoader() {
    document.getElementById('loader-container').style.display = 'none';
    document.body.classList.add('loaded');
}

// Show loader when the page is loading and hide it once it's done
document.addEventListener('DOMContentLoaded', function () {
    showLoader();
    // Simulate a load time
    setTimeout(hideLoader, 3000); // Adjust the time as needed
});




