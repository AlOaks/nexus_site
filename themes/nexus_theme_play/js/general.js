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
$(".bttn-right").click(function() {
    var currentLeft = $(".slides").scrollLeft();
    var slideWidth = $(".popular-item").width();


    $(".slides").scrollLeft((currentLeft + slideWidth));
});

$(".bttn-lft").click(function() {
    var currentRight = $(".slides").scrollLeft();
    var slideWidth = $(".popular-item").width();

    $(".slides").scrollLeft((currentRight - slideWidth));
});

})(jQuery);