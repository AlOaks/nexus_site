(function($) {

$(".btn-lft").click(function() {
    var currentLeft = $(".slider-canada").scrollLeft();
    var slideWidth = $(".slider-item").width();

    $(".slider-canada").scrollLeft((currentLeft + slideWidth));
});

$(".btn-right").click(function() {
 var currentRight = $(".slider-canada").scrollLeft();
 var slideWidth = $(".slider-item").width();

 $(".slider-canada").scrollLeft((currentRight - slideWidth));
 });


/* BLOG FUNCTIONS */


})(jQuery);