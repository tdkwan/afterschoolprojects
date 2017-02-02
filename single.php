<?php get_header();?>
<?php wp_nav_menu(array('theme_location'=>'secondary-navigation')); ?>
<?php wp_nav_menu(array('theme_location'=>'header-menu')) ?>
<?php wp_nav_menu(array('theme_location'=>'primary-navigation')); ?>
<?php if( have_posts() ):
  //Built in function have_posts (has blog posts, pages, etc.)
          while( have_posts() ): the_post();
          get_template_part('content',get_post_format());
          endwhile;
        endif;
          ?>
<script>
  jQuery(function($) {
    $(document).ready(function(){
        var secondaryNav = $('.menu-secondary-navigation-container');
        secondaryNav.hide();
        $(document).scroll(function(){
          var position = $(this).scrollTop();
          var passPoint = $('.menu-primary-navigation-container').position();
          if (position > passPoint.top) {
            secondaryNav.fadeIn("slow");
          } else {
            secondaryNav.fadeOut("fast");
          }
        });
    });
  });
</script>
<?php get_footer();?>
