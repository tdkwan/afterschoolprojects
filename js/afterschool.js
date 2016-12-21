jQuery(function($) {
      var $container = $('#grid');


      $container.isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        layoutMode: 'masonry',
        masonry: {
          columnWidth: '.grid-sizer',

        }
      });

        $(document).ready(function(){
          var navbar = $('.menu-primary-navigation-container');
          $(window).scroll(function(){
            if($(this).scrollTop() < 300) {
            } else {
              navbar.fadeIn(500);

            }
          });
        });
});
