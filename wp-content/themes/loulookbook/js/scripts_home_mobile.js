jQuery(document).ready(function($) {
  $(function() {
      //header animation
      var header = $('header');
      var social = $('.social');
      $(document).on('touchstart', function(){
        header.addClass('scrolled');
        social.addClass('invert')
        
      })
      var scroll = $(window).scrollTop();
      if (scroll == 0) {
        header.removeClass('scrolled');
        social.removeClass('invert')
      }
      
  });
});