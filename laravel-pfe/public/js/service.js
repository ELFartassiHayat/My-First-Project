$(document).ready(function() {
    'use strict';
    var images = [
        { src: '../img/service4.jpg', title: ' An Exceptional service ' },
        { src: '../img/service3.jpg', title: 'at Deluxe Hotel' },
       
    ];
    var currentIndex = 0;

    function preloadImages(callback) {
        var loaded = 0;
        images.forEach(function(image) {
            var img = new Image();
            img.onload = function() {
                loaded++;
                if (loaded === images.length) {
                    callback();
                }
            };
            img.src = image.src;
        });
    }

    function changeBackground() {
        $('.section-services').css('background-image', 'url(' + images[currentIndex].src + ')');
        $(' .section-services .titre h1').text(images[currentIndex].title);
        currentIndex = (currentIndex + 1) % images.length;
    }

    preloadImages(function() {
        $('.section-services').removeClass('ready'); // Retire la classe "ready" pour indiquer que le diaporama est prêt
        changeBackground(); // Charge la première image dès le chargement de la page
        setInterval(changeBackground, 4000); // Change l'image de fond toutes les 4 secondes
    });





  
    
      //smothly scroll to element
 $('.navbar li .nav-link').click(function (e) {
  e.preventDefault(); 
  $('html, body').animate({
      scrollTop: $('#' + $(this).data('scroll')).offset().top + 1 
  }, 200);


});
//Add Active Class on navbar link and remove from siblings
$('.navbar li .nav-link').click(function () {
  $(this).addClass('active').parent().siblings().find('.nav-link').removeClass('active');
});

$(window).scroll (function () {
  //sync navbar links with sections
 $('.block').each(function () {
  if($(window).scrollTop() > $(this).offset().top ) {

   var blockID = $(this).attr('id'); //exemple quand  je entre dans la section about
   $('.navbar li .nav-link').removeClass('active');
   $('.navbar li a[data-scroll="' + blockID +'"]').addClass('active'); 
  }
  });
  // Scroll To Top Button
  var scrollToTop = $('.scroll-to-top');
  if ($(window).scrollTop() >= 1000) {
      if (scrollToTop.is(':hidden')) {
      scrollToTop.fadeIn(400);
  } }
  else {
       scrollToTop.fadeOut(400);
  }
  });
  //Click On scroll to top to Go up
  $('.scroll-to-top').click(function(event) {
 
          e.preventDefault(); 
          $('html, body').animate({
              scrollTop: 0
          }, 1000);
      
      });



$(window).scroll(function() {
var scrollDistance = $(window).scrollTop();

// Déterminez la position à partir de laquelle vous souhaitez changer la classe
var aboutSectionOffset = $('#Services').offset().top;

if (scrollDistance >= aboutSectionOffset) {
  $('.navbar').addClass('navbar-fixed');
} else {
  $('.navbar').removeClass('navbar-fixed');
}

});


// buttons with effects
$('.from-left').hover(function() {
    $(this).find('span').animate({
   width: '100%'
    },200);
}, function() {

    $(this).find('span').animate({
        width:0
         },200);
        });

        $('.border-left').hover(function() {
            $(this).find('span').animate({
           width: '100%'
            },200);
        }, function() {
        
            $(this).find('span').animate({
                width:0
                 },200);
                });



//add class mouvement//

$(window).scroll(function() {
    $('.mouvement').each(function() {
      var windowHeight = $(window).height();
      var windowTopPosition = $(window).scrollTop();
      var windowBottomPosition = (windowTopPosition + windowHeight);
      var sectionTopPosition = $(this).offset().top ;

      // Vérifier si la section est visible dans la fenêtre
      if ((sectionTopPosition + $(this).height() / 2) <= windowBottomPosition) {
        $(this).addClass('visible');
      }
    });
  });

//end class mouvement

    
  });
