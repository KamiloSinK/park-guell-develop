(function($) {
  "use strict";
  
 // menu 
 $('.siteBar-btn, .nav__item__sm, .offcanvas-overlay').click( function (){ 
    $('.mobile-menu, .offcanvas-overlay').toggleClass('siteBar active');   
 }); 

 $('.mobile-menu').click( function (){ 
    $('.mobile-menu, .offcanvas-overlay').removeClass('siteBar active');   
  }); 


  $('.nav__item__sm').click( function (){ 
    $('.mobile-menu').removeClass('siteBar');   
  }); 
  
  // page Animation
  AOS.init({
    mirror: true,
    duration: 1500,
    initClassName: 'aos-init',
    once: true,
  });

  // data-aos="fade-up" 
  // data-aos-delay="300" 

 
})(jQuery);
