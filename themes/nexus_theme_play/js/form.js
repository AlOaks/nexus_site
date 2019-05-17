(function($) {

    // REGISTRATION FORM 

var accommo = $("#reg-accommodation");
var stay = $("#length-div").hide();
var room = $("#room-div").hide();
var meals = $("#meals-div").hide();

// PAGE LANG

var pageLng = $('html').attr('lang');


accommo.change(function() {

    var accom = $(this).val();

    if(accom === 'Yes') {
        stay.show();
        room.show();
        meals.show();
    } else {
        stay.hide();
        room.hide();
        meals.hide();
    }
});


var health = $("#reg-health");
var coverage = $("#coverage-div").hide();


health.change(function() {

    var heal = $(this).val();

    if(heal === 'Yes') {
        coverage.show();
    } else {
        coverage.hide();
    }
});

var regisForm = $('#registration-form-php');

regisForm.submit(function(ev) {
    ev.preventDefault();
    var emailInput = document.createElement('input');
    emailInput.setAttribute('type', 'hidden');
    emailInput.setAttribute('name', 'nexus-email');

    var langInput = document.createElement('input');
    langInput.setAttribute('type', 'hidden');
    // langInput.setAttribute('name', 'pagelang');

    if($('html').is(':lang(en-US)')) {
        emailInput.setAttribute('value', 'contact@nexuseducanada.com');
        // langInput.setAttribute('value', 'ENG');

    } else if($('html').is(':lang(es-ES)')) {
        emailInput.setAttribute('value', 'contacto@nexuseducanada.com');
        // langInput.setAttribute('value', 'ESP');

    } else if($('html').is(':lang(pt-br)')) {
        emailInput.setAttribute('value', 'contato@nexuseducanada.com');
        // langInput.setAttribute('value', 'POR');

    }

    regisForm.append(emailInput);
    // regisForm.append(langInput);


    regisForm.unbind().submit();
});

// ACCOMMODATION FORM


var accForm = $('#accommodation-form');

accForm.submit(function(ev) {
    ev.preventDefault();
    var emailInput = document.createElement('input');
    emailInput.setAttribute('type', 'hidden');
    emailInput.setAttribute('name', 'nexus-email');

    var langInput = document.createElement('input');
    langInput.setAttribute('type', 'hidden');
    langInput.setAttribute('name', 'pagelang');

    if($('html').is(':lang(en-US)')) {
        emailInput.setAttribute('value', 'contact@nexuseducanada.com');
        langInput.setAttribute('value', 'ENG');

    } else if($('html').is(':lang(es-ES)')) {
        emailInput.setAttribute('value', 'contacto@nexuseducanada.com');
        langInput.setAttribute('value', 'ESP');

    } else if($('html').is(':lang(pt-br)')) {
        emailInput.setAttribute('value', 'contato@nexuseducanada.com');
        langInput.setAttribute('value', 'POR');

    }

    accForm.append(emailInput);
    accForm.append(langInput);


    accForm.unbind().submit();
});

// CONTACT FORM

var contForm = $('#contact-form-nexus');

contForm.submit(function(ev) {
    ev.preventDefault();
    var emailInput = document.createElement('input');
    emailInput.setAttribute('type', 'hidden');
    emailInput.setAttribute('name', 'nexus-email');

    if($('html').is(':lang(en-US)')) {
        emailInput.setAttribute('value', 'contact@nexuseducanada.com');
    } else if($('html').is(':lang(es-ES)')) {
        emailInput.setAttribute('value', 'contacto@nexuseducanada.com');
    } else if($('html').is(':lang(pt-br)')) {
        emailInput.setAttribute('value', 'contato@nexuseducanada.com');
    }

    contForm.append(emailInput);

    contForm.unbind().submit();
});

// LANDING PAGE FORM 
var lpForm = $('#month-promotion-form');
var lpFormSending = false;

lpForm.submit(function(ev) {
    ev.preventDefault();

    var lpData = {
        'agencyId': 935,
        'firstname': $('#month-form-name').val(),
        'email': $('#month-form-email').val(),
        'phone': $('#month-form-phone').val(),
        'notes': $('#promotions-landingpage').val(),
        'studentCurrentPipelineStages': [
            {
              "studentPipelineStageId": 17430
            }
          ]
    }

    if(!lpFormSending) {

        lpFormSending = true;

        $.ajax({
            url: 'https://app.edvisor.io/api/v1/student?public_key=public_ae06b8cda938ab061c9ba0d680d41f85',
            data: JSON.stringify(lpData),
            type: 'PUT',
            contentType: 'application/json; chraset=utf-8',
            processData: false
        }).done(function(response) {
            lpFormSending = false;
            $('.form-title').slideToggle();
            $('.month-row').slideToggle();
            $('#monthly-promotion-btn').slideToggle();
            if($('html').is(':lang(en-US)')) {
                lpForm.append('<p style="color: white; text-transform: uppercase; font-size: 2rem; margin-left: auto; margin-right: auto;">Thank you! We will contact you as soon as possible!</p>');          
            } else if($('html').is(':lang(es-ES)')) {
                lpForm.append('<p style="color: white; text-transform: uppercase; font-size: 2rem; margin-left: auto; margin-right: auto;">¡Gracias! Pronto estaremos en contacto contigo.</p>');
            } else if($('html').is(':lang(pt-br)')) {
                lpForm.append('<p style="color: white; text-transform: uppercase; font-size: 2rem; margin-left: auto; margin-right: auto;">Obrigado! Entraremos em contato em breve!</p>');
            }
        }).fail(function(data) {
            lpFormSending = false;
        });
    }
});

// FEATURED PROGRAMS FORM

var fpForm = $('#featprogs-form');
var fpFormSending = false;


fpForm.submit(function(ev) {
    ev.preventDefault();
    var fpData = {
        'agencyId': 935,
        'firstname': $('#featprogs-name').val(),
        'email': $('#featprogs-email').val(),
        'phone': $('#featprogs-phone').val(),
        'notes': 'The student is interested in: ' + $('#featprogs-progs').val() + ' Language: ' + $('#featprogs-lang').val(),
        'studentCurrentPipelineStages': [
            {
              "studentPipelineStageId": 17430
            }
          ]
    }

    if(!fpFormSending) {

        fpFormSending = true;

        $.ajax({
            url: 'https://app.edvisor.io/api/v1/student?public_key=public_ae06b8cda938ab061c9ba0d680d41f85',
            data: JSON.stringify(fpData),
            type: 'PUT',
            contentType: 'application/json; chraset=utf-8',
            processData: false
        }).done(function(response) {
            fpFormSending = false;
        }).fail(function(data) {
            fpFormSending = false;
        });
    }

    fpForm.unbind().submit();
});



})( jQuery );