document.addEventListener('DOMContentLoaded', function () {
    const toggleImages = document.querySelectorAll('.more-info-faq');

    toggleImages.forEach(toggleImage => {
        const targetId = toggleImage.getAttribute('href').substring(1);
        const faqElement = document.getElementById(targetId);
        const faqQuestionId = faqElement.getAttribute('data-faq-target');

        faqElement.addEventListener('shown.bs.collapse', function () {
            toggleImage.src = "frontend/assets/images/faq/less-info-faq.svg";
            document.getElementById(faqQuestionId).style.color = '#29387E';
            document.getElementById(faqQuestionId).style.fontWeight = '500';
            document.getElementById('more-info-faq-div').style.alignItems = 'start';
        });

        faqElement.addEventListener('hidden.bs.collapse', function () {
            toggleImage.src = "frontend/assets/images/faq/more-info-faq.svg";
            document.getElementById(faqQuestionId).style.color = '';
            document.getElementById(faqQuestionId).style.fontWeight = '400';
        });
    }); 
});
