<?php get_header();?>
<?php wp_nav_menu(array('theme_location'=>'secondary-navigation')); ?>
<?php wp_nav_menu(array('theme_location'=>'header-menu')) ?>
<?php wp_nav_menu(array('theme_location'=>'primary-navigation')); ?>
  <?php if( have_posts() ):
    //Built in function have_posts (has blog posts, pages, etc.)
            while( have_posts() ): the_post(); ?>
                <!--We can create our own template files for all types of content using php
                  using get_template_part('content',get_post_format()); searches for content-'aside''gallery' etc to generate
                  a custom content template type !-->
                  <div class="article-container-writing">
                    <div class="article-content-container-writing">
                      <p class="article-content-container"><?php the_content();?></p>
                    </div>
                    <div class="article-author-container-writing">
                      Written By: <?php the_title();?>
                    </div>
                  </div>
            <?php endwhile;

        endif;
  ?>
  <script>
    jQuery(function($) {
      var activeSphere = $('#menu-item-55');
      $(document).ready(function(){
          activeSphere.css({"background-color":"#EA8D79"});
          var secondaryNav = $('.menu-secondary-navigation-container');
          secondaryNav.hide();
          $(document).scroll(function(){
            var position = $(this).scrollTop();
            var passPoint = $('.menu-primary-navigation-container').position();
            if (position > passPoint.top) {
              secondaryNav.fadeIn(300);
            } else {
              secondaryNav.fadeOut(200);
            }
          });
      });
    });
  </script>

<?php get_footer();?>
