$(document).ready(function() {

    $('.themebox').each(function(i){
      setTimeout(function(){
        $('.themebox').eq(i).addClass('is-showing');
      }, 300 * (i+1));
    });

  var slideWidth = $('#mobilewrap').outerWidth();
  var activatorWidth = $('.mobileactivator').outerWidth();
  var activator = $('.mobileactivator');
  var mobilewrap = $('#mobilewrap');
  var contentwrap = $('.contentwrap');
  mobilewrap.css({left: -slideWidth});

  activator.click(function() {
    if (mobilewrap.is(':visible')) {
      mobilewrap.animate({left: -slideWidth},200);
      activator.animate({left: '6px'},0);
      contentwrap.animate({left: '0'},200);
      mobilewrap.delay(200).fadeOut();
    }
    else{
      mobilewrap.show().animate({left: '0'},200);
      contentwrap.animate({left: slideWidth},200);
      activator.animate({left: '1em'},0);
    }
  });
});

$(document).ready(function() {
  $(function(){  $('.heroslideshow > div.slides:gt(0)').hide();
  setInterval(function(){
    var rand = Math.floor(Math.random() * ($('.heroslideshow').children().length-1));
    $('.heroslideshow > :first-child').appendTo('.heroslideshow').fadeOut(3250);
    $('.heroslideshow > *').eq(rand).prependTo('.heroslideshow').fadeIn(3250);
  }, 8000);
});
});

$(function() {

  if (! $.cookie('seen') && $('body').hasClass('home')){
    $.cookie('seen', 'step1', { expires: 120, path: '/' });
    console.log('home origin');
  }

  if ($.cookie('seen')==="step1" && $('body').hasClass('page')){
    $.cookie('seen', 'step2', { expires: 120, path: '/' });
    console.log('home > inner ');
  }

  if ($.cookie('seen')==="step2" && $('body').hasClass('home')){
    $('.modal-container').addClass('is-open');
    $('.fullbacking').addClass('is-down');
    console.log('home > single > home');
  }

  $('.modal-container .close').click(function() {
    $('.modal-container').removeClass('is-open');
    $('.fullbacking').removeClass('is-down');
    $.cookie('seen', 'complete', { expires: 120, path: '/' });
  });

  console.log($.cookie('seen'));

});

$(document).ready(function() {

  $(".owl-carousel").owlCarousel({
    autoPlay : 8000,
    stopOnHover : true,
    navigation:false,
    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    singleItem : true,
    autoHeight : true,
    transitionStyle:"fade"
  });

});