$(document).ready(function(){
  $('.toggler').on('click', function(){
    $('.sidebar').css('left', '0');
    $('.overlay').css('visibility', 'visible');
    $('.overlay').css('opacity', '1');
  });
  $('.dismiss').on('click', function(){
    $('.sidebar').css('left', '-280px');
    $('.overlay').css('visibility', 'hidden');
    $('.overlay').css('opacity', '0');
  });
  $('.overlay').on('click', function(){
    $('.sidebar').css('left', '-280px');
    $('.overlay').css('visibility', 'hidden');
    $('.overlay').css('opacity', '0');
  });
  $('.cart-tab .cart_parent').on('click', function(e){
    e.preventDefault()
    $('.cart_sidebar').addClass('open');
  });
  $('.cart_dismiss').on('click', function(e){
    e.preventDefault()
    $('.cart_sidebar').removeClass('open');
  });
})
var lastScrollTop = 0;
$('.m-fixed-bar').css('top', '-55px');
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){
     $('.m-fixed-bar').css('top', '0');
    } else {
        $('.m-fixed-bar').css('top', '-55px');
   }
   lastScrollTop = st;
});
var lastScrollTop2 = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop2){
     $('.m-fixed-bar2').css('position', 'fixed');
     $('.submenu.label-1 *').css('font-size', '14px');
     $('.image_logo_menu').removeClass('d-none');
    } else {
      if (st <= 40) {
        $('.image_logo_menu').addClass('d-none');
       $('.m-fixed-bar2').css('position', 'relative');
       $('.submenu.label-1 *').css('font-size', '15px');
     }
   }
   lastScrollTop2 = st;
});
$(document).on('ready', function () {
  $('.cover-slick').slick({
      slideToShow: 1,
      fade: true,
      arrows: true,
      dots: true,
      infinite: true
  });
});
$(document).on('ready', function () {
  $('.product-slider').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 6,
      slidesToScroll: 6,
      arrows: true,
      responsive: [
          {
          breakpoint: 1224,
          settings: {
              slidesToShow: 5,
              slidesToScroll: 5,
          }
          },
          {
          breakpoint: 1024,
          settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
          }
          },
          {
          breakpoint: 600,
          settings: {
              slidesToShow: 3,
              slidesToScroll: 3
          }
          },
          {
          breakpoint: 480,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 2
          }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
      ]
  });
  $('.product-slide').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,

  });
});

$(document).ready(function(){
  var quantity = parseInt($('.quantity').val());
  $('.quantity-box').parent().find('.increase').click(function(){
    $(this).parent().find('.quantity').val(quantity++)
  })
  $('.quantity-box').parent().find('.decrease').click(function(){
    if(quantity >= 1){
      $(this).parent().find('.quantity').val(quantity--)
    }
  })
})

$(document).ready(function(){
  $('.filter-dropdown').hide();
  $('#filter').click(function(e){
    e.preventDefault();
    $('.filter-dropdown').slideToggle();
  })
})
$(document).ready(function(){
  $('.rating-stars .star').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10);
    $(this).parent().children('.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
  }).on('mouseout', function(){
    $(this).parent().children('.star').removeClass('hover');
  });

  $('.rating-stars .star').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10);
    var stars = $(this).parent().children('.star');
    for (var i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    for (var i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    var ratingValue = parseInt($('.rating-stars .star.selected').last().data('value'), 10);
    $('#ratingValue').val(ratingValue);
  });
});
$(document).ready(function(){
  $('.review_submit_show').click(function(e){
    e.preventDefault();
    $('.review_box').removeClass('d-none');
    $(this).addClass('d-none');
  })
})
// const myPanzoom = new Panzoom(document.querySelector(".panzoom"), {
//   minScale: 1,
//   maxScale: 2
// });
