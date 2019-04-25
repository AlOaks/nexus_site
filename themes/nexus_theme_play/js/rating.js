(function($) {



    function getAverageRating(a,b,c,d,e) {
        var num1 = parseInt(a);
        var num2 = parseInt(b);
        var num3 = parseInt(c);
        var num4 = parseInt(d);
        var num5 = parseInt(e);

        var average = Math.round((num1 + num2 + num3 + num4 + num5) / 5 * 2) / 2;
        return average;
    }

    function getRating(rating) {
        rating = Math.round(rating * 2) / 2;
        var output = [];

        for (var i = rating; i >= 1; i--) 
            // var star = document.createElement("i");
            // star.className = "fa fa-star";
            // output.appendChild(star);
            output.push('<i class="fas fa-star"></i>&nbsp;');

        if (i == .5) 
            // var halfStar = document.createElement("i");
            // halfStar.className = "fa fa-star-half";
            // output.appendChild(halfStar);

            output.push('<i class="fas fa-star-half-alt"></i>&nbsp;');


        for (i = (5 - rating); i >= 1; i--)
            output.push('<i class="far fa-star"></i>&nbsp;');


            return output.join('');
    }

    var expRating = ratings_vars.expRating;
    var culRating = ratings_vars.culRating;
    var jobRating = ratings_vars.jobRating;
    var valRating = ratings_vars.valRating;
    var locRating = ratings_vars.locRating;


    var averageRating = getAverageRating(expRating, culRating, jobRating, valRating, locRating);



    $('.exp-rating').html(getRating(expRating));
    $('.cul-rating').html(getRating(culRating));
    $('.job-rating').html(getRating(jobRating));
    $('.val-rating').html(getRating(valRating));
    $('.loc-rating').html(getRating(locRating));


    $('.average-rating').html(getAverageRating(expRating, culRating, jobRating, valRating, locRating));
    $('.average-stars').html(getRating(averageRating));


})( jQuery );