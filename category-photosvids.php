<?php get_header();?>
<?php wp_nav_menu(array('theme_location'=>'secondary-navigation')); ?>
<?php wp_nav_menu(array('theme_location'=>'header-menu')) ?>
<?php wp_nav_menu(array('theme_location'=>'primary-navigation')); ?>
<div class="row">
  <?php if( have_posts() ):
    //Built in function have_posts (has blog posts, pages, etc.)
            while( have_posts() ): the_post(); ?>
                <!--We can create our own template files for all types of content using php
                  using get_template_part('content',get_post_format()); searches for content-'aside''gallery' etc to generate
                  a custom content template type !-->
                  <div class="col-xs-12 col-md-4 category-article-container">
                    <a href="<?php echo get_permalink();?>">
                      <?php the_post_thumbnail(); ?>
                    </a>
                    <div class="category-article-info-container">
                      <div class="category-article-title-container">
                        <a href="<?php echo get_permalink();?>">
                        <?php the_title(); ?>
                        </a>
                      </div>
                      <div class="category-article-date-container">
                        <?php the_time('F Y');//F j, Y specifies format ?>
                      </div>
                      <div class="category-article-excerpt-container">
                        <?php the_excerpt();?>
                      </div>
                    </div>
                  </div>

            <?php endwhile;

        endif;
  ?>
</div>
  <script>
    jQuery(function($) {
      var activeSphere = $('#menu-item-92');
      $(document).ready(function(){
          activeSphere.css({"background-color":"#EA8D79"});
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
