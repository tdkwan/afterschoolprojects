<?php get_header();?>
<?php wp_nav_menu(array('theme_location'=>'secondary-navigation')); ?>
<?php wp_nav_menu(array('theme_location'=>'header-menu')) ?>
<?php wp_nav_menu(array('theme_location'=>'primary-navigation')); ?>

  <?php if( have_posts() ):
    //Built in function have_posts (has blog posts, pages, etc.)
            while( have_posts() ): the_post(); ?>
                  <div class="row meet-us-author-container"><!--We can create our own template files for all types of content using php
                    using get_template_part('content',get_post_format()); searches for content-'aside''gallery' etc to generate
                    a custom content template type !-->
                    <div class="col-md-4 col-xs-12 meet-us-author-img">
                      <?php the_post_thumbnail();?>
                    </div>
                    <div class="col-md-8 meet-us-author-text-container">
                        <div class="meet-us-author-text-name">
                          <?php the_title();?>
                        </div>
                        <hr></hr>
                        <div class="meet-us-author-text-bio">
                          <?php the_content();?>
                        </div>
                      </div>
                  </div>
            <?php endwhile;

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
