jQuery(document).ready(function ($) {

   // menu
   $('header .open-menu').click(function () {

    $('header .open-menu .line:nth-child(2)').animate({
      marginRight: '-100px',
      opacity: '0'
    },500);
    $('header .open-menu .line:nth-child(4)').animate({
      marginRight: '100px',
      opacity: '0'
      
    },500);
    $('header .open-menu .first').css('transform','rotate(45deg)');
    $('header .open-menu .third').css('transform','rotate(-45deg)');
    $(this).animate({
      'position: ': 'absolute',
      'top':'-54px',
      'right':'170px'
    },600);
    $(this).css('position','absolute');
 $('header .menu ').animate({
  marginRight: '0',
  
},500);
$('header .close-menu').animate({
  opacity: '1',
  
},300);


  })
  $('header .close-menu').click(function () {
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
    },600);

  
 $('header .menu ').animate({
  marginRight: '-500px',
  
},500);
$(this).animate({
  opacity: '0',
  
},300);
  })

// scroll

$(' .scroll-top i').on('click', function(){
  $('html, body').animate({scrollTop:0}, '2000');
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
    nextEl: '#g2',
    prevEl: '#g1',
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
    nextEl: '#o2',
    prevEl: '#o1',
  },
});
jQuery(".carousel .swiper-container").hover(function() {
  (this).swiper.autoplay.stop();
}, function() {
  (this).swiper.autoplay.start();
});


//   var slider = new Swiper('.full-slider', {
//     autoplayDisableOnInteraction:true,
//     pagination: {
//       el: '.swiper-slider-pagintaion',
//       clickable: true,
//     },
//     });

//   // menu
//   jQuery('header .open-menu').click(function () {
//   jQuery('header  .menu').animate({

//     marginRight: 0,

//   }, 500);

//   jQuery('header .close-menu').css("display", "block");

// });

// jQuery(' header .close-menu').click(function () {

//   jQuery('header .menu').animate({

//     marginRight: "-500px",

//   }, 600);

//   jQuery(' .close-menu').css("display", "none");


// });
// new WOW({ mobile: true }).init();

})
