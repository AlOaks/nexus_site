(function($) {

    /* SLIDERS */

$('.btn-lft').click(function() {
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
 });

 $('.peo-btn-left').click(function() {
    var currentRight = $('.programs-container-people').scrollLeft();
    var slideWidth = $('.people-program-container').width();
   
    $('.programs-container-people').scrollLeft((currentRight - slideWidth));
 });

 /* HEADER */

$('.menu-btn-active').click(function(e) {
    e.preventDefault;
    $('.menu').slideToggle('slow');
})


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
})






$('.submit-btn-front').click(function(e){
    e.preventDefault;
    var type = $('.selector').val().toLowerCase();
    window.location = 'cities/'+type;

    console.log(type);
});

$('.see-programs-btn').click(function(e){
    e.preventDefault;
    var type = $('.prg-type-select').val().toLowerCase();
    window.location = '../cities/'+type;
});




})(jQuery);