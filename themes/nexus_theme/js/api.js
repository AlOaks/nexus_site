(function ($) {

  // Ajax functions
  function ajaxGet(request) {

    $.ajax({
        method: 'get',
        // Go to the wordpress rest api and get the request
        url: api_vars.root_url + request,
      })
      .done(function (data) {
        // Loop through the returned results
        for (var i = 0; i < data.length; i++){
        
          // Construct an article from each returned Object
          console.log(data)
          var post = data[i];
          var image = '';
          var school = post['_nexus_program_school'];
          var title = post['_nexus_program_title'];
          var programContainer = 'program-container-' + i;
          var programType = post['_nexus_program_type'];
          var link = api_vars.home_url + '/' + post['slug'];
        
          if (post['featured_media'] !== undefined){
            image = post['_embedded']['wp:featuredmedia'][0]['source_url'];
          }
          var article = '<article class=program-container "' + programContainer + '">';
          article += '<div class="program-link"><a href="' + link + '">'
          article += '<div class="program-image"><img src="' + image + '"></div>'
          article += '<div class="program-school"><p>' + school + '</p></div>'; 
          article += '<div class="program-name"><p>' + title + '</p></div>';
          for (var program in programType){
            article += '<div class ="program-type"><p>' + programType[program] + '</p></div>'
          }
          article += '</a></div></article>'

          $('.search-results').append(article);

        } // for loop
      })
      .fail(function() {
        $('.search-results').append('<div><p>No programs matched your search</p></div>');
      });
  }

  // Construct Get request based on form input
  function requestFilter () {
    var program = $('select[name*="programfilter"]').val();
    var province = $('select[name*="provincefilter"]').val();
    var request = 'wp/v2/nexus_program/?_embed&filter';
    if (program === 'Program' && province === 'Province') {
      return;
    } else if (program === 'Program') {
      request += '[provinces]=' + province;
    } else if (province === 'Province') {
      request += '[program_type]=' + program;
    } else {
      request += '[program_type]=' + program + '&filter[provinces]=' + province;
    }
    return request;
  }

  // Change the page style after the search form is submitted
  function styleChange(){
    $('.hero-wrapper').removeClass('hidden');
    $('.program-title').addClass('hidden');
    $('.program-filter-submit').addClass('hidden');
    $('.button-wrapper').addClass('hidden');
    $('.select-container').addClass('select-container-searched');
    $('.select-form-wrapper').addClass('select-form-wrapper-searched');
    $('.program-content').addClass('program-content-container');
    $('.program-content').css({
      'background-image': 'none',
      'min-height': 'none'
    });
  }
  // Variable to check the state of the form
  var submitted = false;

  // Event listener on submit button 
  // Will run both styleChange and ajaxGet if a valid request is submitted
  $('.program-filter-submit').on('click', function (event){
    event.preventDefault();
    $('.search-results').empty();
    // Get a request based on search form filters and check that it returns posts
    var request = requestFilter();
    if (request !== undefined) {
      ajaxGet(request);
      styleChange();
      submitted = true;
    }
  });

  $('select').on('change', function() {
    if (submitted) {
       $('.search-results').empty();
      var request = requestFilter();
      if (request === undefined) {
        return true;
      }
      ajaxGet(request);
      styleChange();
    }
  });


})(jQuery);


