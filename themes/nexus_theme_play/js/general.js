(function($) {


    // console.log($.fn.jquery);
    var browserLang = window.navigator.userLanguage || window.navigator.language;

    if(browserLang === 'en-US' || 'en-CA') {
        
    }

    /* HEADER */
    var prevScrollpos = window.pageYOffset;

    window.onscroll = function() {

        var currentScrollPos = window.pageYOffset;

        if (prevScrollpos > currentScrollPos) {
            $('#masthead').removeClass('hiding');
            // $('#masthead').addClass('header-white');
        } else {
            $('#masthead').addClass('hiding');
            // $('#masthead').removeClass('header-white');

        }
        prevScrollpos = currentScrollPos;
    }

    // $(window).on('scroll', function() {
    //     if($(window).scrollTop() > 50) {
    //         $('#masthead').addClass('header-white');
    //     } else {
    //         $('#masthead').removeClass('header-white');
    //     }
    // });


    // ANIMATIONS

    $(window).on('load', function() {
        $('.hero-label-div').addClass('hero-label-div-shown');
    })
    

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


// SOCIAL LINKS

if ($('html').is(':lang(es-ES)')) {

    $('.facebook-link').attr('href', 'https://www.facebook.com/nexuseducanada/');
    $('.linked-link').attr('href', 'https://www.linkedin.com/company/nexus-education-consulting-mx');
    $('.instagram-link').attr('href', 'https://www.instagram.com/nexuscanada_mx/');
}


// EDVISOR FORMS


// BCIT LANDING FORM

var form = $('#edvisor-bcit-form');
var edvisorFormSending = false;
var edvisorAPI = 'public_ae06b8cda938ab061c9ba0d680d41f85';
var edvisorURL = 'https://app.edvisor.io/api/v1/student?public_key=';
var api64 = btoa(edvisorAPI);

form.submit(function(event) {

    event.preventDefault();

    var button = $('#edvisor-button');

    var formData = {
        'agencyId': '935',
        'firstname': $('#edvisor-bcit-name').val(),
        'email': $('#edvisor-bcit-email').val(),
        'phone': $('#edvisor-bcit-phone').val(),
        'notes': $('#edvisor-bcit-canada').val(),
        'studentCurrentPipelineStages': [
            {
                'studentPipelineStageId': 9087
            }
        ]
    }

    if(!edvisorFormSending) {

        edvisorFormSending = true;

        $.ajax({
            url: 'https://app.edvisor.io/api/v1/student?public_key=public_ae06b8cda938ab061c9ba0d680d41f85',
            data: JSON.stringify(formData),
            type: 'PUT',
            contentType: 'application/json; chraset=utf-8',
            processData: false
        }).done(function() {
            edvisorFormSending = false;
            if($('html').is(':lang(en-US)')) {
                window.location.href="https://nexuseducanada.com/thanks-bcit";
            } else if($('html').is(':lang(es-ES)')) {
                window.location.href="https://nexuseducanada.com/gracias-bcit";
            } else if($('html').is(':lang(pt-BR)')) {
                window.location.href="https://nexuseducanada.com/obrigado-bcit";
            }
        }).fail(function(data) {
            edvisorFormSending = false;
        });
    }

});



// GET QUOTE FORM FUNCTIONS

var quote = $('#edvisor-quote');
var durationField = $('#edvisor-duration');
$('#other-duration-div').hide();

durationField.on('change', function() {
    var duration = durationField.val();

    if(duration === 'Outro') {

        $('#other-duration-div').show();
    } else {
        $('#other-duration-div').hide();
    }
});


// QUOTE FORM SUBMISSION 

var quoteForm = $('#edvisor-quote');
var edvisorQuoteSending = false;


quoteForm.submit(function(submit) {
    submit.preventDefault();

    var btn = $('#edvisor-quote-btn');

    var quoteData = {
        'agencyId': '935',
        'firstname': $('#edvisor-firstname').val(),
        'lastname': $('#edvisor-lastname').val(),
        'email': $('#edvisor-email').val(),
        'phone': $('#edvisor-phone').val(),
        'address': $('#edvisor-city').val(),
        'notes': $('#edvisor-objectives').val(),
    
        "studentCoursePreferences": [
            {
              "name": $('#edvisor-programs').val()
            }
        ],
    
        "studentSchoolPreferences": [
            {
              "name": $('#edvisor-desired-city').val()
            }
        ],
    
        'customPropertyValues': [
            {
                'customPropertyFieldId': 'age',
                'value': $('#edvisor-age').val()
            },
            {
                'customPropertyFieldId': 'estado-civil',
                'customOptionSelections': [$('#edvisor-status').val()]
            },
            {
                'customPropertyFieldId': 'education_level',
                'customOptionSelections': [$('#edvisor-edu-level').val()]
            },
            {
                'customPropertyFieldId': 'se-formado',
                'value': $('#edvisor-seformado').val()
            },
            {
                'customPropertyFieldId': 'língua-de-interesse',
                'customOptionSelections': [$('#edvisor-lang-of-interest').val()]
            },
            {
                'customPropertyFieldId': 'english_level',
                'customOptionSelections': [$('#edvisor-level').val()]
            },
            {
                'customPropertyFieldId': 'duração',
                'customOptionSelections': [$('#edvisor-duration').val()]
            },
            {
                'customPropertyFieldId': 'outro-duração',
                'value': $('#edvisor-other-duration').val()
            },
            {
                'customPropertyFieldId': 'previsão-de-início',
                'customOptionSelections': [$('#edvisor-desired-start').val()]
            },
            {
                'customPropertyFieldId': 'incluir-seguro-saúde',
                'customOptionSelections': [$('#edvisor-insurance').val()]
            },
            {
                'customPropertyFieldId': 'incluir-acomodação',
                'customOptionSelections': [$('#edvisor-accommodation').val()]
            },  
        ]
    }


    if(!edvisorQuoteSending) {

        edvisorQuoteSending = true;

        $.ajax({
            url: 'https://app.edvisor.io/api/v1/student?public_key=public_ae06b8cda938ab061c9ba0d680d41f85',
            data: JSON.stringify(quoteData),
            type: 'PUT',
            contentType: 'application/json; chraset=utf-8',
            processData: false
        }).done(function(response) {
            edvisorFormSending = false;

            if($('html').is(':lang(en-US)')) {
                window.location.href="https://nexuseducanada.com/thanks-quote";
            } else if($('html').is(':lang(es-ES)')) {
                window.location.href="https://nexuseducanada.com/gracias-cotiza";
            } else if($('html').is(':lang(pt-BR)')) {
                window.location.href="https://nexuseducanada.com/obrigado-orcamento";
            }
        }).fail(function(data) {
            edvisorFormSending = false;
        });

    }
});


// BOOK CONSULTATION FORM

var bookForm = $('#edvisor-book-form');
var edvisorBookSending = false;

bookForm.submit(function(ev) {
    ev.preventDefault();

    var bookData = {
        'agencyId': 935,
        'firstname': $('#edvisor-book-firstname').val(),
        'lastname': $('#edvisor-book-lastname').val(),
        'email': $('#edvisor-book-email').val(),
        'phone': $('#edvisor-book-phone').val(),
        'notes' : 'Chat with us FORM'
    }


    if(!edvisorBookSending) {

        edvisorBookSending = true;

        $.ajax({
            url: 'https://app.edvisor.io/api/v1/student?public_key=public_ae06b8cda938ab061c9ba0d680d41f85',
            data: JSON.stringify(bookData),
            type: 'PUT',
            contentType: 'application/json; chraset=utf-8',
            processData: false
        }).done(function(response) {
            edvisorBookSending = false;
            bookForm.slideToggle();
            if($('html').is(':lang(en-US)')) {
                $('.form-book').append('<div style="width: 80%; margin-left: auto; margin-right: auto; color: white; background: #bd2020; padding: 2.5% 15%">Thank you! We will contact you as soon as possible!</div>');
            } else if($('html').is(':lang(es-ES)')) {
                $('.form-book').append('<div style="width: 80%; margin-left: auto; margin-right: auto; color: white; background: #bd2020; padding: 2.5% 15%">¡Gracias! Estaremos en contacto a la brevedad posible.</div>');
            } else if($('html').is(':lang(pt-BR)')) {
                $('.form-book').append('<div style="width: 80%; margin-left: auto; margin-right: auto; color: white; background: #bd2020; padding: 2.5% 15%">Obrigado! Entraremos em contato em breve.</div>');
            }
        }).fail(function(data) {
            edvisorBookSending = false;
        });
    }
});

})( jQuery );