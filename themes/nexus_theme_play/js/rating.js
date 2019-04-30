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


    // ESL

    var natMix = ratings_esl.natMix;
    var acaQuality = ratings_esl.acaQuality;
    var offCampus = ratings_esl.offCampus;
    var eleClasses = ratings_esl.eleClasses;
    var pathOptions = ratings_esl.pathOptions;  

    var averageRating = getAverageRating(natMix, acaQuality, offCampus, eleClasses, pathOptions);

    $('.nat-rating').html(getRating(natMix));
    $('.qua-rating').html(getRating(acaQuality));
    $('.off-rating').html(getRating(offCampus));
    $('.cla-rating').html(getRating(eleClasses));
    $('.pat-rating').html(getRating(pathOptions));

    $('.average-rating').html(getAverageRating(natMix, acaQuality, offCampus, eleClasses, pathOptions));
    $('.average-stars').html(getRating(averageRating));


    // PUBLIC

    var pubNat = ratings_pub.pubNatMix;
    var valPrice = ratings_pub.valPrice;
    var carService = ratings_pub.carService;
    var indRep = ratings_pub.indRep;
    var creditTransfer = ratings_pub.creditTransfer;

    var averagePubRating = getAverageRating(pubNat, valPrice, carService, indRep, creditTransfer);

    $('.pub-nat-rating').html(getRating(pubNat));
    $('.pub-car-rating').html(getRating(carService));
    $('.pub-val-rating').html(getRating(valPrice));
    $('.rep-rating').html(getRating(indRep));
    $('.transfer-rating').html(getRating(creditTransfer));

    $('.average-pub-rating').html(getAverageRating(pubNat, carService, valPrice, indRep, creditTransfer));
    $('.average-pub-stars').html(getRating(averagePubRating));


    // PRIVATE

    var privNat = ratings_pri.privNatMix;
    var priValPrice = ratings_pri.priValPrice;
    var privCarService = ratings_pri.privCarService;
    var jobPlace = ratings_pri.jobPlace;
    var flexClass = ratings_pri.flexClasses;

    var averagePrivRating = getAverageRating(privNat, priValPrice, privCarService, jobPlace, flexClass);

    $('.priv-nat-rating').html(getRating(privNat));
    $('.priv-car-rating').html(getRating(privCarService));
    $('.priv-val-rating').html(getRating(priValPrice));
    $('.job-rating').html(getRating(jobPlace));
    $('.flex-rating').html(getRating(flexClass));

    $('.average-priv-rating').html(getAverageRating(privNat, privCarService, priValPrice, jobPlace, flexClass));
    $('.average-priv-stars').html(getRating(averagePrivRating));


})( jQuery );