jQuery(document).ready(function(){
  $(window).load(function(){
    // VARIABLES
    var $pageHeight = $(window).height(),
    $pageWidth = $(window).width();
    navMenu();
    countingNumber();

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
  });
});

// FUNCTION LISTS
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
