jQuery(document).ready(function($) {
  
  
  // slideshow
  $(function() {
    $('#slides').slidesjs({
      width: 600,
      height: 450,
      pagination: {
        active: false
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