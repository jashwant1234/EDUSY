<<<<<<< HEAD
(($) => {
=======
jQuery(function ($) {
>>>>>>> a5d4bd5d471902427f9ec15971a5b1f6fef38236

  const SCROLLING_NAVBAR_OFFSET_TOP = 50;

  $(window).on('scroll', () => {

    const $navbar = $('.navbar');
<<<<<<< HEAD
    if ($navbar.length) {

      if ($navbar.offset().top > SCROLLING_NAVBAR_OFFSET_TOP) {

        $('.scrolling-navbar').addClass('top-nav-collapse');
      } else {

        $('.scrolling-navbar').removeClass('top-nav-collapse');
      }
    }
  });
})(jQuery);
=======
    
    if (!$navbar.length) return;

    $('.scrolling-navbar')[$navbar.offset().top > SCROLLING_NAVBAR_OFFSET_TOP ? 'addClass' : 'removeClass']('top-nav-collapse');
  });
});
>>>>>>> a5d4bd5d471902427f9ec15971a5b1f6fef38236
