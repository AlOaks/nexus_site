(function($) {

    $('.slick-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: true,
        pauseOnHover: true,
        pauseOnFocus: false
    });

    $('.slick-dots > li > button').html('');



    $('.area-slider-in').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: true,
        pauseOnHover: true,
        pauseOnFocus: false,
        appendDots: $('.slider-dots'),
        dots: true
    })


})( jQuery )