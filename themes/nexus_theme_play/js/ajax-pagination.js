(function($){

    var page = 1; // What page we are on.
    var ppp = 2; // Post per page


    $('#more_posts').click(function(e){ 
        // When btn is pressed.
        e.preventDefault;
        $("#more_posts").attr("disabled",true); // Disable the button, temp.
        $.post(ajaxurl, {
            action:"more_post_ajax",
            offset: (page + ppp) + 1,
            ppp: ppp,
            beforeSend : function(xhr) {
                $("#more_posts").text('Loading...');
            }
        }).success(function(posts){
            page++;
            $(".blog-section").append(posts); // CHANGE THIS!
            $("#more_posts").attr("disabled",false);
            $("#more_posts").text("Load More");

           
            
        });

   });


})(jQuery);