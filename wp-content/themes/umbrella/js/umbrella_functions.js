$(document).ready(function(){
    //Slick Slider
    $('#services-slides').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '#services-controls',
        adaptiveHeight: true,
    });
    $('#services-controls').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '#services-slides',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        autoplay: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }

        ]
    });
    $('#services-controls, #services-slides').on('click', function() {
        $('#services-controls').slick('slickPause');
    });
    //Anchor Links
    $(document).scroll(function() {
        if ($(document).scrollTop() >= 100 ) {
            $('#header').addClass('active');
        } else {
            $('#header').removeClass('active');
        }
    });
    $('a.nav-link, a.anchor-link').click(function(e) {
        e.preventDefault();
        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var anchor = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(anchor).offset().top
        });
    });
});
