<?php get_header();?>
<?php wp_nav_menu(array('theme_location'=>'secondary-navigation')); ?>
<?php wp_nav_menu(array('theme_location'=>'header-menu')) ?>
<?php wp_nav_menu(array('theme_location'=>'primary-navigation')); ?>
<div class="article-container">
  <div class="article-featured-img-container">
    <?php the_post_thumbnail(); ?>
    <div class="article-featured-title">
      <?php the_title();?>
    </div>
  </div>
  <div class="article-content-container">
    <div class="article-content">
        <?php if( have_posts() ):
          //Built in function have_posts (has blog posts, pages, etc.)
                  while( have_posts() ): the_post(); ?><?php the_content();?>
                <?php endwhile;

            endif;
      ?>
    </div>
  </div>
</div>

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
