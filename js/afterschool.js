jQuery(function($) {
      var $container = $('.grid');

      $container.imagesLoaded(function() {
        $container.masonry();
      });
      $('.grid').isotope({
        itemSelector: '.grid-item',
        masonry: {
        }
      });
});
