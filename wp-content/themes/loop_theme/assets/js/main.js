jQuery(document).ready(function($){
  $(window).load(function(){
    // VARIABLES
    var $pageHeight = $(window).height(),
    $pageWidth = $(window).width();
    navMenu();
    if ($('#particles-js').length > 0) {
      particles();
    }
    if ($('.main-trades-to-date').length > 0) {
      countingNumber();
    }
    if ($('#testimonial-trigger').length > 0) {
      testimonialCarousel();
    }
    if ($('#page-package').length > 0) {
      changingPackage();
    }

    // INITIATIONS
    AOS.init({ once: true });

    $('.loader-overlay').fadeOut(500);
  });

  $(window).on('resize', function(){
    // VARIABLES
    var $pageHeight = $(window).height(),
    $pageWidth = $(window).width();
  });

  $(window).on('scroll', function(){
    AOS.init({ once: true });
    var st = $(this).scrollTop();
    var navigation = $('section.navigation');

    if (st > 115) {
      navigation.addClass('position-fix').fadeIn('fast');
    } else {
      navigation.removeClass('position-fix').fadeIn('fast');
    }
  });
});

// FUNCTION LISTS
function particles(){
  particlesJS("particles-js", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#cf9737"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":5,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
}

function countingNumber(){
  $('.count').each(function () {
    $(this).prop('Counter',0).animate({
      Counter: $(this).text()
    }, {
      duration: 1000,
      easing: 'swing',
      step: function (now) {
        $(this).text(Math.ceil(now));
      }
    });
  });
}

function changingPackage(){
  $('.can-toggle__switch').click(function(){
    $('.box-holder .box-item').toggleClass('flipped');
    return true;
  })
}

function testimonialCarousel(){
  $('#testimonial-trigger').slick({
    slidesToShow: 3,
    autoplay: false,
    infinite: true,
    speed: 500,
    arrows: true,
    prevArrow: '<a href class="slick-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>',
    nextArrow: '<a href class="slick-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>',
  });
}

function navMenu(){
  // If a link has a dropdown, add sub menu toggle.
  $('nav ul li a:not(:only-child)').click(function(e) {
    $(this).siblings('.nav-dropdown .sub-menu').toggle();
    // Close one dropdown when selecting another
    $('.nav-dropdown .sub-menu').not($(this).siblings()).hide();
    e.stopPropagation();
  });
  // Clicking away from dropdown will remove the dropdown class
  $('html').click(function() {
    $('.nav-dropdown .sub-menu').hide();
  });
  // Toggle open and close nav styles on click
  $('#nav-toggle').click(function() {
    $('nav ul').slideToggle();
  });
  // Hamburger to X toggle
  $('#nav-toggle').on('click', function() {
    this.classList.toggle('active');
  });
};

/*
* Method smooth scrolls to given anchor point
*/
function smoothScrollTo(anchor) {
  var duration = 400; //time (milliseconds) it takes to reach anchor point
  var targetY = $(anchor).offset().top;
  $("html, body").animate({
    "scrollTop" : targetY
  }, duration, 'easeInOutCubic');
};

function backToTop(){
  // BACK TO TOP
  // $('.back-to-top').hide(); // HIDE ON FIRST LOAD
  $(window).scroll(function () {
    var windowHeight = $(window).height() * 3;
    if ($(this).scrollTop() > windowHeight) {
      $('.back-to-top').fadeIn();
    } else {
      $('.back-to-top').fadeOut();
    }
  });
  $('.back-to-top a').click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 800);
    return false;
  });
};
