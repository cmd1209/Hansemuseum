$(document).ready(function() {

  var slideWidth = $('#mobilewrap').outerWidth()+20;
  var activatorWidth = $('.mobileactivator').outerWidth();
  var activator = $('.mobileactivator');
  var mobilewrap = $('#mobilewrap');
  var contentwrap = $('.contentwrap');
  mobilewrap.css({left: -slideWidth});

  activator.click(function() {
    if (mobilewrap.is(':visible')) {
      mobilewrap.animate({left: -slideWidth},200);
      activator.animate({left: '5px'},200);
      contentwrap.animate({left: '0'},200);
      activator.css({position: 'absolute'});
      mobilewrap.delay(200).fadeOut();
    }
    else{
      mobilewrap.show().animate({left: '0'},200);
      contentwrap.animate({left: slideWidth},200);
      activator.animate({left: slideWidth-activatorWidth-5},200);
      activator.css({position: 'fixed'});
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


$(document).ready(function() {

  $("#owl-demo").owlCarousel({
    autoPlay : 3000,
    stopOnHover : true,
    navigation:true,
    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    singleItem : true,
    autoHeight : true,
    transitionStyle:"fade"
  });

});