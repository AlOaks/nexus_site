(function($) {
  console.log("bye");
    $('.menu-content').hide();
  
  $('.menu-toggle').on('click', function(e) {
    e.preventDefault();
    $('.menu-content').slideToggle("swing").focus(); 
  });
    $('.menu-content').on('click', function(){
      $('.menu-content').toggle().focus();
    });


    $("#primary").click(function(event) { 
      if(!$(event.target).closest('.menu-content').length) {
          if($('.menu-content').is(":visible")) {
              $('.menu-content').hide();
          }
      }        
  });

  $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      // autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:true,
      lazyLoad: true,
      navText: ['<', '>'],
      responsiveClass: true,
      responsive:{
          0:{
              items:1,
          },
          600:{
              items:1,
          },
          1000:{
              items:1,
          },
      }
  })

  $(function () {
    $('select').selectric();
  });

  //single-nexus_faq dropdown menus
  $(function () {
    $('.homestay-button').click(function () {
      $(this).next('.faq-dropdown').slideToggle("swing");

      $(this).parent().next().slideToggle();
      return false;
    })
  });
  
  //single-nexus_faq return to top button
  $('.return-to-top-button').click(function() {      
    $('body,html').animate({
        scrollTop : 0                     
    }, 500);
  }); 
// Province toggle




      $('.choose-wrapper-bc').hide();  
    $('.bc').on('click', function(e) {
      $('.choose-province-wrapper').css('margin-bottom', '200px');
      $('.hide-prov').hide();  
      e.preventDefault();     
      $('.choose-wrapper-bc').slideToggle("swing").focus() 
    });

      $('.choose-wrapper-ab').hide();  
    $('.ab').on('click', function(e) {
      $('.choose-province-wrapper').css('margin-bottom', '200px');
      $('.hide-prov').hide();  
      e.preventDefault();     
      $('.choose-wrapper-ab').slideToggle("swing").focus() 
    });

      $('.choose-wrapper-man').hide();  
    $('.man').on('click', function(e) {
      $('.choose-province-wrapper').css('margin-bottom', '200px');
      $('.hide-prov').hide();  
      e.preventDefault();     
      $('.choose-wrapper-man').slideToggle("swing").focus() 
    });

      $('.choose-wrapper-sk').hide();  
    $('.sk').on('click', function(e) {
      $('.choose-province-wrapper').css('margin-bottom', '200px');
      $('.hide-prov').hide();  
      e.preventDefault();     
      $('.choose-wrapper-sk').slideToggle("swing").focus() 
    });

      $('.choose-wrapper-on').hide();  
    $('.on').on('click', function(e) {
      $('.choose-province-wrapper').css('margin-bottom', '200px');
      $('.hide-prov').hide();  
      e.preventDefault();     
      $('.choose-wrapper-on').slideToggle("swing").focus() 
    });
  
      $('.choose-wrapper-qc').hide();  
    $('.qc').on('click', function(e) {
      $('.choose-province-wrapper').css('margin-bottom', '200px');
      $('.hide-prov').hide();  
      e.preventDefault();     
      $('.choose-wrapper-qc').slideToggle("swing").focus() 
    });
})(jQuery);
