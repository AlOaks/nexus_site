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

   $('#more_posts_club').click(function(e){ 
    // When btn is pressed.
    e.preventDefault;
    $("#more_posts_club").attr("disabled",true); // Disable the button, temp.
    $.post(ajaxurl, {
        action:"more_post_club",
        offset: (page + ppp) + 1,
        ppp: ppp,
        beforeSend : function(xhr) {
            $("#more_posts_club").text('Loading...');
        }
    }).success(function(posts){
        page++;
        $(".blog-section").append(posts); // CHANGE THIS!
        $("#more_posts_club").attr("disabled",false);
        $("#more_posts_club").text("Load More");

       
        
    });

});

   
	$('#filter').submit(function(){
		var filter = $('#filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				filter.find('button').text('Processing...'); // changing the button label
			},
			success:function(data){
				filter.find('button').text('Apply filter'); // changing the button label back
				$('.type-programs-container').html(data); // insert data
			}
		});
		return false;
});






})(jQuery3);