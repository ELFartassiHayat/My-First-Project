$(function(){  
    'use strict';
      //smothly scroll to element
 $('.navbar li .nav-link:not(.navbar li .nav-link.contact)').click(function (e) {
  e.preventDefault(); 
  $('html, body').animate({
      scrollTop: $('#' + $(this).data('scroll')).offset().top + 1 
  }, 200);


});
//Add Active Class on navbar link and remove from siblings
$('.navbar li .nav-link:not(.navbar li .nav-link.contact)').click(function () {
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
var aboutSectionOffset = $('#About,#Contact').offset().top;

if (scrollDistance >= aboutSectionOffset) {
  $('.navbar').addClass('navbar-fixed');
} else {
  $('.navbar').removeClass('navbar-fixed');
}

});

/*mouvement background image */
var images = [
  { src: '../img/background.jpg', title: 'welcome to Deluxe Hotel' },
  { src: '../img/background2.jpg', title: 'a Best Place To Stay' },
 
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
  $('.section , .section-contact').css('background-image', 'url(' + images[currentIndex].src + ')');
  $('.titre h1').text(images[currentIndex].title);
  currentIndex = (currentIndex + 1) % images.length;
}

preloadImages(function() {
  $('.section , .section-contact').removeClass('ready'); // Retire la classe "ready" pour indiquer que le diaporama est prêt
  changeBackground(); // Charge la première image dès le chargement de la page
  setInterval(changeBackground, 4000); // Change l'image de fond toutes les 4 secondes
});


/* end mouvement background image */



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
/*start about */
$('.about').waypoint(function(direction) {
  if (direction === 'down') {
     
      $('.about-icon li').addClass('animated bounceInLeft');
     
      $('.about-icon li').css('animation-delay', '0.2s');
  } else {
     
      $('.about-icon li').removeClass('animated bounceInLeft')
     
      $('.about-icon li').css('animation-delay', '0s');
  }
}, { offset: '50%' });
/*end about*/
/*start gallery*/
//  Active le carrousel
    $('#carouselExampleCaptions').carousel();

    // Déclenche le changement d'image toutes les 3 secondes (3000 millisecondes)
    setInterval(function(){
        $('#carouselExampleCaptions').carousel('next');
    }, 2500);
/*end gallery*/


//start swiper rooms

                var swiper = new Swiper('.swiper-container', {
                    effect: 'coverflow',
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: 'auto',
                    coverflowEffect: {
                      rotate: 50,
                      stretch: 0,
                      depth: 100,
                      modifier: 1,
                      slideShadows : true,
                    },
                    pagination: {
                      el: '.swiper-pagination',
                    },
                  });
            
 // Initialisez le carrousel Swiper avec les flèches de navigation
var swiper = new Swiper('.swiper-container', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows : true,
    },
    pagination: {
      el: '.swiper-pagination',
    },
  
  

 
  
    });
//start map
    $(document).ready(function() {
      // Créer un élément iframe pour la carte Google Maps
      var mapIframe = $('<iframe frameborder="0" style="border:0" allowfullscreen></iframe>');
  
      // Ajouter les attributs src et srcdoc à l'iframe pour afficher la carte
      mapIframe.attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.770502695935!2d-74.00600178459277!3d40.71277568236781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xe33b4ad70cf51554!2sEmpire%20State%20Building!5e0!3m2!1sen!2suk!4v1649876158233!5m2!1sen!2suk');
      mapIframe.attr('srcdoc', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.770502695935!2d-74.00600178459277!3d40.71277568236781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xe33b4ad70cf51554!2sEmpire%20State%20Building!5e0!3m2!1sen!2suk!4v1649876158233!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>');
  
      // Ajouter l'iframe à la div #map
      $('#map').append(mapIframe);
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