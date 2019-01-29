(function($) {


    console.log($.fn.jquery);

    /* HEADER */
    var prevScrollpos = window.pageYOffset;

    window.onscroll = function() {

        var currentScrollPos = window.pageYOffset;

        if (prevScrollpos > currentScrollPos) {
            $('#masthead').removeClass('hiding');
        } else {
            $('#masthead').addClass('hiding');
        }
        prevScrollpos = currentScrollPos;
    }



    $('#menu-item-247').click(function() {
        $(this).children('.sub-menu').toogle();
    });

    $('#menu-item-246').click(function() {
        $(this).children('.sub-menu').toogle();
    });

    /* SLIDERS */

    

$('.btn-lft').click(function() {
    var currentLeft = $('.slider-canada').scrollLeft();
    var slideWidth = $('.slider-item').width();
    
    $('.slider-canada').scrollLeft((currentLeft + slideWidth));

});



$('.btn-left').click(function() {

    var currentLeft = $('.slider-canada').scrollLeft();
    var slideWidth = $('.slider-item').width();

    $('.slider-canada').scrollLeft((currentLeft + slideWidth));

});




$('.btn-right').click(function() {
    var currentRight = $('.slider-canada').scrollLeft();
    var slideWidth = $('.slider-item').width();

    $('.slider-canada').scrollLeft((currentRight - slideWidth));
 });


 $('.why-btn-right').click(function() {
    var currentLeft = $('.why-items-container').scrollLeft();
    var slideWidth = $('.why-item').width();

    $('.why-items-container').scrollLeft((currentLeft + slideWidth));
 });

 $('.why-btn-left').click(function() {
    var currentRight = $('.why-items-container').scrollLeft();
    var slideWidth = $('.why-item').width();
   
    $('.why-items-container').scrollLeft((currentRight - slideWidth));
 });

 

 $('.peo-btn-right').click(function() {
    var currentRight = $('.programs-container-people').scrollLeft();
    var slideWidth = $('.people-program-container').width();
   
    $('.programs-container-people').scrollLeft((currentRight + slideWidth));
 })

 $('.peo-btn-left').click(function() {
    var currentRight = $('.programs-container-people').scrollLeft();
    var slideWidth = $('.people-program-container').width();
   
    $('.programs-container-people').scrollLeft((currentRight - slideWidth));
 });

 /* HEADER */

$('.menu-btn-active').click(function(e) {
    e.preventDefault;
    $('.menu').slideToggle('slow');
    $('.white-overlay-menu').toggle();
});


/* BLOG FUNCTIONS */

$('.bttn-right').click(function() {
    var currentLeft = $('.slides').scrollLeft();
    var slideWidth = $('.popular-item').width();


    $('.slides').scrollLeft((currentLeft + slideWidth));
});

$('.bttn-lft').click(function() {
    var currentRight = $('.slides').scrollLeft();
    var slideWidth = $('.popular-item').width();

    $('.slides').scrollLeft((currentRight - slideWidth));
});

// PROGRAMS



$('.box-1').click(function() {
    $('.icons-1').toggleClass('more-prg-icons-shown');
    $('.chevron-1').toggle();
    $('.chev-up-1').toggle();
});



$('.box-2').click(function() {
    $('.icons-2').toggleClass('more-prg-icons-shown');
    $('.chevron-2').toggle();
    $('.chev-up-2').toggle();
});



$('.box-3').click(function() {
    $('.icons-3').toggleClass('more-prg-icons-shown');
    $('.chevron-3').toggle();
    $('.chev-up-3').toggle();
});



$('.box-4').click(function() {
    $('.icons-4').toggleClass('more-prg-icons-shown');
    $('.chevron-4').toggle();
    $('.chev-up-4').toggle();
});



$('.box-5').click(function() {
    $('.icons-5').toggleClass('more-prg-icons-shown');
    $('.chevron-5').toggle();
    $('.chev-up-5').toggle();
});




// BLOG



$(".blog-categories-dropdown").click(function(){
    $(".blog-cats-dropdown").slideToggle();
    $(".fa-chevron-down").toggle();
    $(".fa-chevron-up").toggle();
});

$(".other-categories").click(function(){
    $(".categories-list-arc2").slideToggle();
    $(".fa-chevron-down").toggle();
    $(".fa-chevron-up").toggle();
});



$('.submit-btn-front').click(function(e){
    e.preventDefault;
    var type = $('.selector').val().toLowerCase();
    window.location = 'cities/'+type;

});

$('.see-programs-btn').click(function(e){
    e.preventDefault;
    var type = $('.prg-type-select').val().toLowerCase();
    window.location = '../cities/'+type;
});

$('.tax-programs-btn').click(function(e){
    e.preventDefault;
    var type = $('.prg-type-select-tax').val().toLowerCase();
    console.log(type);
    window.location = '../'+type;
});

// CITIES FILTERS 

$('.filters-container').hide();

$('.advanced-filters').click(function(e) {
    e.preventDefault;
    $('.filters-container').slideToggle();
});


// FAQ

$('.answer').hide();

$('.question').click(function() {
    $(this).next().slideToggle();
    $(this).toggleClass('question-active');
    return false;
});


// PROGRAMS DURATION FUNCTIONS

var price4 = prices_vars.price4;
var price8 = prices_vars.price8;
var price12 = prices_vars.price12;
var price24 = prices_vars.price24;

function price() {
    $('.li-price').html(price4);
}

function accommodation() {
    $('.accommodation-span').html('4');
}


accommodation();
price();



$('.duration-selector-single').change(function(e) {
    e.preventDefault;

    var val = $('.duration-selector-single').val();

    var price;
    var accommodation;

    if(val == 4) {  
        price = price4;
        accommodation = 4;

    } else if(val == 8) {
        price = price8;
        accommodation = 8;


    } else if(val == 12) {
        price = price12;
        accommodation = 12;


    } else if(val == 24) {
        price = price24 + '*';
        accommodation = 4;  

    }


    $('.li-price').html(price);
    $('.accommodation-span').html(accommodation);
});





})( jQuery );