$(document).ready(function() {

  $(".owl-carousel").owlCarousel({
    autoPlay : 18000,
    navigation: false,
    paginationSpeed : 800,
    goToFirstSpeed : 3500,
    singleItem : true,
  });
});


$(document).ready(function() {
  var activator = $('.mobileactivator');
  var mobilewrap = $('#mobilewrap');

  activator.click(function() {
    mobilewrap.toggleClass("is-visible is-hidden");
  });
});


$(document).ready(function() {
    $('.grid-item').each(function(i){
      setTimeout(function(){
        $('.grid-item').eq(i).addClass('is-showing');
      }, 300 * (i+1));
    });
});

$(document).ready(function() {
  $(function(){  $('.heroslideshow > div.slides:gt(0)').hide();
  setInterval(function(){
    var rand = Math.floor(Math.random() * ($('.heroslideshow').children().length-1));
    $('.heroslideshow > :first-child').appendTo('.heroslideshow').fadeOut(6500);
    $('.heroslideshow > *').eq(rand).prependTo('.heroslideshow').fadeIn(6500);
  }, 8000);
});
});

$(document).ready(function() {
  $(function(){  $('.bulletin-board > li.bulletin:gt(0)').hide();
  setInterval(function(){
    var rand = Math.floor(Math.random() * ($('.bulletin-board').children().length-1));
    $('.bulletin-board > :first-child').appendTo('.bulletin-board').fadeOut(6500);
    $('.bulletin-board > *').eq(rand).prependTo('.bulletin-board').fadeIn(6500);
  }, 8000);
});
});

$(document).ready(function() {
  $(function(){  $('.slogan-container > h2:gt(0)').hide();
  setInterval(function(){
    var rand = Math.floor(Math.random() * ($('.slogan-container').children().length-1));
    $('.slogan-container > :first-child').appendTo('.slogan-container').fadeOut(3250);
    $('.slogan-container > *').eq(rand).prependTo('.slogan-container').fadeIn(3250);
  }, 6000);
});
});

// $(document).ready(function() {
//   $('.modal-container').addClass('is-open');
//   $('.fullbacking').addClass('is-down');

//   $('.modal-container .close').click(function() {
//     $('.modal-container').removeClass('is-open');
//     $('.fullbacking').removeClass('is-down');
//   });
// });



// $(function() {
//   if (! $.cookie('seen') && $('body').hasClass('home')){
//     $.cookie('seen', 'step1', { expires: 120, path: '/' });
//     console.log('home origin');
//   }
//   if ($.cookie('seen')==="step1" && $('body').hasClass('page')){
//     $.cookie('seen', 'step2', { expires: 120, path: '/' });
//     console.log('home > inner ');
//   }
//   if ($.cookie('seen')==="step2" && $('body').hasClass('home')){
//     $('.modal-container').addClass('is-open');
//     $('.fullbacking').addClass('is-down');
//     console.log('home > single > home');
//   }
//   $('.modal-container .close').click(function() {
//     $('.modal-container').removeClass('is-open');
//     $('.fullbacking').removeClass('is-down');
//     $.cookie('seen', 'complete', { expires: 120, path: '/' });
//   });
// });