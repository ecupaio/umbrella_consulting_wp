$(document).ready(function(){
    //Slick Slider
    $('#services-slides').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '#services-controls',
        adaptiveHeight: true
    });
    $('#services-controls').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '#services-slides',
        dots: false,
        arrows: false,
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
            scrollTop: $(anchor).offset().top - 100
        });
    });
    //Map
    var contactAddr = $('.contact-addr').text();
    var mapAddr = encodeURIComponent(contactAddr);
    var mapUri = "https://maps.googleapis.com/maps/api/staticmap?center="+mapAddr+"&format=jpg&visual_refresh=true&maptype=roadmap&style=element:geometry%7Ccolor:0xf5f5f5&style=element:labels.icon%7Cvisibility:off&style=element:labels.text.fill%7Ccolor:0x616161&style=element:labels.text.stroke%7Ccolor:0xf5f5f5&style=feature:administrative.land_parcel%7Celement:labels.text.fill%7Ccolor:0xbdbdbd&style=feature:poi%7Celement:geometry%7Ccolor:0xeeeeee&style=feature:poi%7Celement:labels.text.fill%7Ccolor:0x757575&style=feature:poi.park%7Celement:geometry%7Ccolor:0xe5e5e5&style=feature:poi.park%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&style=feature:road%7Celement:geometry%7Ccolor:0xffffff&style=feature:road.arterial%7Celement:labels.text.fill%7Ccolor:0x757575&style=feature:road.highway%7Celement:geometry%7Ccolor:0xdadada&style=feature:road.highway%7Celement:labels.text.fill%7Ccolor:0x616161&style=feature:road.local%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&style=feature:transit.line%7Celement:geometry%7Ccolor:0xe5e5e5&style=feature:transit.station%7Celement:geometry%7Ccolor:0xeeeeee&style=feature:water%7Celement:geometry%7Ccolor:0xc9c9c9&style=feature:water%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&size=1000x400&scale=2&zoom=15&key=AIzaSyBdiR7mdc_EDKE_8LQFtBw-pLTo7rxxhnM";
    $('.contact-form-bg').attr('style','background-image: url('+mapUri+')');
    //Social Media Menu
    var social;

    $('.social-link').each(function(i,obj) {
        social = $(this).attr('href');
        if (social.indexOf('facebook') > -1) {
            $(this).html('<i class="fa fa-facebook"></i>');
        } else if (social.indexOf('twitter') > -1) {
            $(this).html('<i class="fa fa-twitter"></i>');
        } else if (social.indexOf('linkedin') > -1) {
            $(this).html('<i class="fa fa-linkedin"></i>');
        }
    });

    //Contact Form
    $('.contact-form').submit(function(e) {
        e.preventDefault();
        var contactName = $('.contact-name').val();
        var contactEmail = $('.contact-email').val();
        var contactPhone = $('.contact-phone').val();
        var contactText = $('.contact-text').val();
        $.ajax({

               url: "https://docs.google.com/forms/d/e/1FAIpQLSee9BCd8Oehab4HdRXyS235gDHZHekMl4VyeFRM5bpKE5zflw/formResponse",
               data: {'entry.716104746' : contactName, 'entry.1479226033' : contactEmail, 'entry.2096412461' : contactPhone,'entry.455393523' : contactText},
               type: "POST",
               dataType: "json",
               statusCode: {
                0: function() {
                    $('.form-success').addClass('active');

                }
            }
           });
    });
    var bioImage = $('.bio-img').data('bio-img');
    function bioImg() {

        if ($(this).width() <= 768) {
            $('.bio-img').attr('style','background-image: linear-gradient(to bottom,rgba(2,65,109,1),transparent 25%),url('+bioImage+')');
        } else {
            $('.bio-img').attr('style','background-image: linear-gradient(to right,rgba(2,65,109,1),transparent 50%),url('+bioImage+')');
        }
    }
    $(window).on('resize',function(){
        bioImg();
    });
    $(window).on('load',function(){
        bioImg();
    });

});
