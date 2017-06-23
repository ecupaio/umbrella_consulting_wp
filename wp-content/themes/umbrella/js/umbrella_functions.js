$(document).ready(function(){
    console.log('js loaded');
    $('#services-slides').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '#services-controls'
    });
    $('#services-controls').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '#services-slides',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        autoplay: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2
            }
        }]
    });
    $('#services-controls, #services-slides').on('click', function() {
        $('#services-controls').slick('slickPause');
    });
});
