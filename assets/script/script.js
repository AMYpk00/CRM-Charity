document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.querySelector('.fa-bars');
    const nav = document.querySelector('.nav');
    
    // Add aria-expanded attribute for accessibility
    menuButton.setAttribute('aria-expanded', 'false');
    
    menuButton.addEventListener('click', function() {
        // Toggle the active class
        nav.classList.toggle('active');
        
        // Update aria-expanded
        const isExpanded = nav.classList.contains('active');
        menuButton.setAttribute('aria-expanded', isExpanded);
    });

    $('.post-wrap').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        nextArrow: $('.next'),
        prevArrow: $('.prev'),
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000
            }
        }]
    });

    if (document.querySelector('#body')) {
        ClassicEditor
            .create(document.querySelector('#body'))
            .then(editor => {
                console.log('Editor initialized');
            })
            .catch(error => {
                console.error('Editor failed to initialize:', error);
            });
    }
    
});

