jQuery(document).ready(function($) {
  $(function() {
      //caches a jQuery object containing the header element
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

});