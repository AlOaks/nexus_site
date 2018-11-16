(function($) {

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

// PROGRAMS SEARCH

$('.see-programs-btn').click(function(e){
    e.preventDefault;
    $('.retrieved-programs-container').empty();
    var urlProg = nexus_vars.rest_url+'wp/v2/programs';
    var typeID = $('.prg-type-select').val().toLowerCase();
    var cityID = $('.prg-location-select').val().toLowerCase();

    console.log(typeID);
    console.log(cityID);

    $.ajax({

        method: 'GET',
        cache: false,
        url: urlProg+'?_embed',
        dataType: 'json',

    })
    .done(function(progs) {
        console.log(progs);
        

            for(var i = 0; i < progs.length; i++) {
                var thename = progs[i].title.rendered;
                var thecityID = progs[i]._embedded["wp:term"][1][0].slug;
                var thetypeID = progs[i]._embedded["wp:term"][2][0].slug;
                var theimg = progs[i]._embedded["wp:featuredmedia"][0].source_url;
                var thetype = progs[i]._embedded["wp:term"][2][0].name;
                var thelink = progs[i].link; 

                if(typeID == thetypeID && cityID == thecityID) {
                    $(".retrieved-programs-container").append("<div class='prg-retrieved-container'></div>");
                    $(".prg-retrieved-container").append("<img class=prg-img src='"+theimg+"'>");
                    $(".prg-retrieved-container").append("<h2 class='prg-name'><a href='"+thelink+"'>"+thename+"</a></h2>");
                    $(".prg-retrieved-container").append("<p class='prg-type'>"+thetype+"</p>");
                } 
            }     
            
    })
    .fail(function() {
        console.log( "error" );
    })
    .always(function() {
        console.log( "complete" );
    });

});

})(jQuery);