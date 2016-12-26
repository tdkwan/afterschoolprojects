<?php get_header();?>
<?php wp_nav_menu(array('theme_location'=>'secondary-navigation')); ?>
<?php wp_nav_menu(array('theme_location'=>'header-menu')) ?>
<?php wp_nav_menu(array('theme_location'=>'primary-navigation')); ?>

  <?php if( have_posts() ):
    //Built in function have_posts (has blog posts, pages, etc.)
            while( have_posts() ): the_post(); ?>
            <div class="article-container">
              <div class="article-title-container">
                <h1 class="article-title"><?php the_title(); ?></h1>
              </div>
              <hr></hr>
              <div class="post-featured-img-container">
                <?php the_post_thumbnail();?>
              </div>
              <a href="<?php get_permalink(); ?>">article</a>
              <div class="article-content-container">
                <div class="article-content-container-small">
                  <p class="article-content"><?php the_content();?></p>
                </div>
              </div>
            </div>
            <?php endwhile;

        endif;
  ?>
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
