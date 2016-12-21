<?php get_header();?>
<?php wp_nav_menu(array('theme_location'=>'header-menu')) ?>
<?php wp_nav_menu(array('theme_location'=>'primary-navigation')); ?>

  <?php if( have_posts() ):
    //Built in function have_posts (has blog posts, pages, etc.)
            while( have_posts() ): the_post(); ?>
                <div class="row"><!--We can create our own template files for all types of content using php
                  using get_template_part('content',get_post_format()); searches for content-'aside''gallery' etc to generate
                  a custom content template type !-->
                  <div class="article-title-container">
                    <h1 class="article-title"><?php the_title(); ?></h1>
                  </div>
                  <hr></hr>
                  <div class="post-featured-img-container">
                    <?php the_post_thumbnail();?>
                  </div>
                  <div class="col-xs-12">
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
      });
    });
  </script>
<?php get_footer();?>
