jQuery( function($) {

  // new WOW().init();


  // Smooth Scrolling: Smooth scrolls to an ID on the current page.
  // To use this feature, add a link on your page that links to an ID, and add the .page-scroll class to the link itself. See the docs for more details.
  jQuery('a.page-scroll').bind('click', function(event) {
      var $anchor = jQuery(this);
      jQuery('html, body').stop().animate({
          scrollTop: (jQuery($anchor.attr('href')).offset().top - 62)
      }, 800, 'easeInOutExpo');
      event.preventDefault();
  });

  // jQuery to collapse the navbar on scroll
  jQuery(window).scroll(function() {
      if (jQuery("#header").offset().top > 80) {
          jQuery("#header").addClass("shrink");
      } else {
        jQuery("#header").removeClass("shrink");
      }
  });

  // toggleClass to hambuger menu
  jQuery('.navbar-toggler').on('click', function() {
    $(this).toggleClass('open');
  })

  jQuery('#rsvp .rtb-booking-form input, #rsvp .rtb-booking-form select, #rsvp .rtb-booking-form textarea').on( 'focus', function() {
    jQuery(this).parent().find('label').addClass('focused');
  });

  jQuery('[data-toggle="tabajax"]').on('click', function(e) {
      var $this = jQuery(this),
          loadurl = $this.attr('href'),
          targ = $this.attr('data-target');

      jQuery.get(loadurl, function(data) {
          jQuery(targ).html(data);
      });

      $this.tab('show');
      return false;
  });

  jQuery(".boca-events").owlCarousel({
    loop: true,
    center:false,
    startPosition: 0,
    margin:20,
    dots: false,
    autoplay: true,
    autoplayTimeout: 4000,
    navText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>"
    ],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            margin: 10,
            nav:false,
            loop:false,
            stagePadding: 80,
            startPosition: 1,
        },
        600:{
            items:3,
            nav:false,
        },
        1000:{
            items:4,
            nav:false,
            loop:false
        }
    }
  });


});
