jQuery(function($) {
      var $container = $('#grid');


      $container.isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        masonry: {
          columnWidth: '.grid-sizer'
        }
      });
});
