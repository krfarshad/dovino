jQuery(document).ready(function ($) {

   // menu
   $('header .open-menu').click(function () {
    $('.logo').addClass('fixed-logo');
    $('header .open-menu .line:nth-child(2)').animate({
      marginRight: '-100px',
      opacity: '0'
    },300);
    $('header .open-menu .line:nth-child(4)').animate({
      marginRight: '100px',
      opacity: '0'
      
    },300);
    $('header .open-menu .first').css('transform','rotate(45deg)');
    $('header .open-menu .third').css('transform','rotate(-45deg)');
    $(this).animate({
      'position: ': 'absolute',
      'top':'-54px',
      'right':'170px'
    },300);
    $(this).css('position','absolute');
 $('header .menu ').animate({
  marginRight: '0',
  
},300);
$('header .close-menu').animate({
  opacity: '1',
  
},200);


  })
  $('header .close-menu').click(function () {
    $('.logo').removeClass('fixed-logo');
    $('header .open-menu .line:nth-child(2)').animate({
      marginRight: '-0',
      opacity: '1'
    },500);
    $('header .open-menu .line:nth-child(4)').animate({
      marginRight: '0',
      opacity: '1'
      
    },500);
    $('header .open-menu .first').css('transform','rotate(0)');
    $('header .open-menu .third').css('transform','rotate(0)');
    $('header .open-menu').animate({
      'position: ': 'absolute',
      'top':'-4px',
      'right':'10px'
    },300);

  
 $('header .menu ').animate({
  marginRight: '-500px',
  
},500);
$(this).animate({
  opacity: '0',
  
},300);
  })

// scroll

$(' .scroll-top i').on('click', function(){
  $('html, body').animate({scrollTop:0}, '3000');
  return false;
  });

// home-slider
  var slider = new Swiper('.full-slider', {
    autoplayDisableOnInteraction:true,
    pagination: {
      el: '.swiper-slider-pagintaion',
      clickable: true,
    },
    });

// carousel
var website = new Swiper('.website .carousel .swiper-container', {
  slidesPerView: 'auto',
  spaceBetween: 1,
  autoplayDisableOnInteraction:true,
  autoplayDisableOnHover:true,

  autoplay: {
    delay: 2500,
    
  },
  navigation: {
    nextEl: '#f2',
    prevEl: '#f1',
  },
});
var graphic = new Swiper('.graphic .carousel .swiper-container', {
  slidesPerView: 'auto',
  spaceBetween: 1,
  autoplayDisableOnInteraction:true,
  autoplayDisableOnHover:true,

  autoplay: {
    delay: 2500,
    
  },
  navigation: {
    nextEl: '#f4',
    prevEl: '#f3',
  },
});
var other = new Swiper('.other .carousel .swiper-container', {
  slidesPerView: 'auto',
  spaceBetween: 1,
  autoplayDisableOnInteraction:true,
  autoplayDisableOnHover:true,
  autoplay: {
  delay: 2500,
  },
  navigation: {
    nextEl: '#f6',
    prevEl: '#f5',
  },
});
jQuery(".carousel .swiper-container").hover(function() {
  (this).swiper.autoplay.stop();
}, function() {
  (this).swiper.autoplay.start();
});

$('.pack-item').click(function(){
  alert("دوره های آموزشی به زودی بارگزاری خواهند شد..");
});

$('.packs .archive a').click(function(){
  alert("دوره های آموزشی به زودی بارگزاری خواهند شد..");
});
$('.down').click(function(){
  e.prevntDefault;
  $('.sub-menu').toggle();
});


    $('.menu-item-has-children').append('<i class="down fas fa-angle-left"></i>');

 $('.menu-item-has-children>a').click(function(e){
  e.preventDefault();
   $('.sub-menu').slideToggle();
   $(this).siblings('.down').toggleClass('rotate-angle');
  
 })



// new WOW({ mobile: true }).init();

})
