$(document).ready(function() {

  /* For the sticky navigation (waypoint) */
  $('.js--section-features').waypoint(function(direction) {
    if (direction == "down") {
      $('nav').addClass('sticky');
    } else {
      $('nav').removeClass('sticky');
    }
  }, {
    offset: '60px;' /* activate 60px 'before' '.js--section-features' class. */
  });


  /* Scroll on buttons */
  $('.js--scroll-to-plans').click(function () {
    $('html, body').animate({scrollTop: $('.js--section-plans').offset().top}, 1000);
  });

  $('.js--scroll-to-start').click(function () {
    $('html, body').animate({scrollTop: $('.js--section-features').offset().top}, 1000);
  });


  /* Navigation scroll */
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });


    /* Animations on scroll */
    $('.js--wp-1').waypoint(function(direction) {
      $('.js--wp-1').addClass('animated fadeIn')
    }, {
      offset: '50%'
    });

    $('.js--wp-2').waypoint(function(direction) {
      $('.js--wp-2').addClass('animated fadeInUp')
    }, {
      offset: '50%'
    });

    $('.js--wp-3').waypoint(function(direction) {
      $('.js--wp-3').addClass('animated fadeIn')
    }, {
      offset: '50%'
    });

    $('.js--wp-4').waypoint(function(direction) {
      $('.js--wp-4').addClass('animated pulse')
    }, {
      offset: '50%'
    });


    /* Mobile navigation */
    $('.js--nav-icon').click(function() {
      var nav = $('.js--main-nav'); /* variables can store things */
      var icon = $('.js--nav-icon i');

      nav.slideToggle(200); /* Open and closes a box. 200ms speed */
      if (icon.hasClass('ion-navicon-round')) {
        icon.addClass('ion-close-round');
        icon.removeClass('ion-navicon-round');
      } else {
        icon.addClass('ion-navicon-round');
        icon.removeClass('ion-close-round');
      }
    });


    /* 
      Maps
      https://developers.google.com/maps/documentation/javascript/tutorial#Loading_the_Maps_API
    */
    var map = new GMaps({
      div: '.map',
      lat: 38.7436057,
      lng: -9.2302432
    });

    map.addMarker({
      lat: 38.7436057,
      lng: -9.2302432,
      title: 'Lisbon',
      infoWindow: {
        content: '<p>Our Lisbon Headquarters</p>'
      }
    });


});