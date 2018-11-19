$(document).ready(function(){
  $(window).load(function(){
    // VARIABLES
    var $pageHeight = $(window).height(),
    $pageWidth = $(window).width(),

    // INITIATIONS
    AOS.init({ once: true });

    $('.loader-overlay').fadeOut(200);
  });

  $(window).on('resize', function(){
    // VARIABLES
    var $pageHeight = $(window).height(),
    $pageWidth = $(window).width(),
  });

  $(window).on('scroll', function(){
    AOS.init({ once: true });
  });
});

// FUNCTION LISTS
/*
* Method smooth scrolls to given anchor point
*/
function smoothScrollTo(anchor) {
  var duration = 400; //time (milliseconds) it takes to reach anchor point
  var targetY = $(anchor).offset().top;
  $("html, body").animate({
    "scrollTop" : targetY
  }, duration, 'easeInOutCubic');
}

function mobileLayout(){
  // MOBILE MENU
  if(!$('.sidepanel').hasClass('sidepanel-out')){
    $('.close-sidemenu').hide();
  }
  $('.mobile-menu-btn').click(function(){
    $('.sidepanel').toggleClass("sidepanel-out" , 1000);
    $(this).toggleClass('toggle-mobile-menu', 1000);
    if(!$('.sidepanel').hasClass('sidepanel-out')){
      $('.close-sidemenu').hide();
    } else {
      $('.close-sidemenu').show();
    }
  });
  $('.close-sidemenu').click(function(){
    $('.sidepanel').toggleClass("sidepanel-out", 1000);
    $(this).hide();
  });

  // MOBILE LAYOUT - PARENT CONTAINER
  $('.sidepanel .parent-nav-1 > li > .sub-menu, .desktop-menu .parent-nav-1 > li > .sub-menu').addClass('level1');
  $('.sidepanel .parent-nav-1 .level1 > li > .sub-menu, .desktop-menu .parent-nav-1 .level1 > li > .sub-menu').addClass('level2');
  $('.sidepanel .parent-nav-1 .level2 > li > .sub-menu, .desktop-menu .parent-nav-1 .level2 > li > .sub-menu').addClass('level3');

  // MOBILE LAYOUT - CHILD LEVEL 1
  for (var i = 0; i < 3; i++) {
    $('.sidepanel .parent-nav-1 .level'+i+' > li, .desktop-menu .parent-nav-1 .level'+i+' > li').each(function(e){
      var current1 = $(this);
      if( current1.hasClass('menu-item-has-children') ){
        current1.find('> a').addClass('level'+i+'-title level-title-child column-middle');
        $('<span class="icm-right level-controls level'+i+'-control column-middle"></span>').insertAfter( current1.find('> a') );
      }
    });
  }

  // BACK TO TOP
  $('.back-to-top').hide(); // HIDE ON FIRST LOAD
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
}

// CUSTOM FUNCTIONS STARTS HERE