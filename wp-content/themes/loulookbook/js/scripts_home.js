jQuery(document).ready(function($) {
  $(function() {
      //header animation
      var header = $('header');
      var social = $('.social');
      $(window).scroll(function() {
          var scroll = $(window).scrollTop();

          if (scroll >= 50) {
              header.addClass('scrolled');
              social.addClass('invert')
          } else {
              header.removeClass('scrolled');
              social.removeClass('invert')
          }
      });
  });
  
  // slideshow
  $(function() {
    $('#slides').slidesjs({
      width: 600,
      height: 450,
      pagination: {
        active: true
      },
      navigation: {
        active: false
      },
      play: {
        active: true,
        effect: "fade",
        interval: 3000,
        auto: true,
        swap: true
      },
      effect: {
        fade: {
          // Slide effect settings.
          speed: 2000
            // [number] Speed in milliseconds of the slide animation.
        }
      }
    });
  });
});