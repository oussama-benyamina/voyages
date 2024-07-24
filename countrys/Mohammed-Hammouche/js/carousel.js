$(document).ready(function() {
    $('.destination-carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    // Menu déroulant pour "Destinations"
    const destinationsLink = document.querySelector('.nav-links li:nth-child(2)');
    const dropdown = destinationsLink.querySelector('.dropdown');

    destinationsLink.addEventListener('mouseover', () => {
        dropdown.style.display = 'block';
    });

    destinationsLink.addEventListener('mouseout', () => {
        dropdown.style.display = 'none';
    });
});
