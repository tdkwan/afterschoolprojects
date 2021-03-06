<?php get_header();?>
  <?php wp_nav_menu(array('theme_location'=>'secondary-navigation')); ?>
  <?php wp_nav_menu(array('theme_location'=>'header-menu')) ?>
  <div class="home-logo-container">
    <div class="dark-overlay"></div>
    <img class="main-logo-background" src="http://localhost:8888/wordpress-asp/wp-content/uploads/2017/01/IMG_3221-min.jpg">
    <div class="home-logo">
      <img class="main-logo" src="http://localhost:8888/wordpress-asp/wp-content/uploads/2017/01/logo-white.png">
      <div class="row container-fluid">
        <div class="col-xs-4">
          <h5>creativity</h5>
        </div>
        <div class="col-xs-4">
          <h5>adventure</h5>
        </div>
        <div class="col-xs-4">
          <h5>gratitude</h5>
        </div>
      </div>
    </div>
  </div>
  <?php wp_nav_menu(array('theme_location'=>'primary-navigation')); ?>

    <!--ISOTOPE GRID INTRO PAGE!-->
    <div id="grid">
      <div class="grid-sizer"></div>
      <?php if( have_posts() ):
        //Built in function have_posts (has blog posts, pages, etc.)
                while( have_posts() ): the_post(); ?>
                    <!--We can create our own template files for all types of content using php
                      using get_template_part('content',get_post_format()); searches for content-'aside''gallery' etc to generate
                      a custom content template type !-->

      <?php //determines if the code is wide or tall on the front page, determined by the post tags. (add label grid-tall)
        $all_the_tags = get_the_tags();
      if ($all_the_tags);
      foreach ($all_the_tags as $this_tag) {
      	if ($this_tag->name == "grid-tall" ) {
      ?>
      <div class="grid-item grid-tall">
        <a href="<?php echo get_permalink();?>">
            <?php if (class_exists('MultiPostThumbnails')) :
                    MultiPostThumbnails::the_post_thumbnail(
                        get_post_type(),
                        'secondary-image'
                    );
                endif; ?>
        </a>
        <div class="post-text-container">
            <div class="sphere-name">
                <?php $category_list = get_the_category_list(', ', 'multiple', false);
                echo $category_list;
                ?>
            </div>
          <div class="article-name">
            <a href="<?php echo get_permalink();?>">
              <h2 class="article-name-word"><?php the_title();?></h2>
            </a>
          </div>
          <div class="grid-article-content">
            <p><?php the_excerpt();?></p>
          </div>
          <div class="article-author">
            <?php the_author_posts_link();?>
          </div>
        </div>
      </div>
      <?php 	} else if ($this_tag->name == "grid-wide" ) { ?>
          <div class="grid-item grid-wide">
            <a href="<?php echo get_permalink();?>">
                <?php if (class_exists('MultiPostThumbnails')) :
                        MultiPostThumbnails::the_post_thumbnail(
                            get_post_type(),
                            'secondary-image'
                        );
                    endif; ?>
            </a>
            <div class="post-text-container">
                <div class="sphere-name">
                    <?php $category_list = get_the_category_list(', ', 'multiple', false);
                    echo $category_list;
                    ?>
                </div>
              <div class="article-name">
                <a href="<?php echo get_permalink();?>">
                  <h2 class="article-name-word"><?php the_title();?></h2>
                </a>
              </div>
              <div class="grid-article-content">
                <p><?php the_excerpt();?></p>
              </div>
              <div class="article-author">
                <?php the_author_posts_link();?>
              </div>
            </div>
          </div>
      <?php 	} else {
      		// it's neither, do nothing
      ?>
      		<!-- not tagged as one or the other -->
      <?
      	}
      }

      ?>
  <?php endwhile;

endif;
?>
    </div>

<!--
  <div class="front-page-flex container">
    <div class="flex-item-featured">
      <a href="http://localhost:8888/wordpress-asp/wordpress-asp/wordpress-asp/wordpress-asp/category/photosvids/">
        <img class="featured-flex-image" src="http://localhost:8888/wordpress-asp/wordpress-asp/wordpress-asp/wordpress-asp/wp-content/uploads/2016/12/IMG_1429.jpg">
      </a>
    </div>
    <div class="flex-item-tall">
      <a href="#">
        <img class="flex-item-tall-image" src="http://localhost:8888/wordpress-asp/wordpress-asp/wordpress-asp/wordpress-asp/wp-content/uploads/2016/12/IMG_0217.jpg">
      </a>
    </div>
  </div>
!-->
<script>
//small fade in menu after scroll

  jQuery(function($) {
    $(document).ready(function(){
        var secondaryNav = $('.menu-secondary-navigation-container');
        secondaryNav.hide();
        $(document).scroll(function(){
          var position = $(this).scrollTop();
          var passPoint = $('.menu-primary-navigation-container').position();
          if (position > passPoint.top) {
            secondaryNav.fadeIn(400);
          } else {
            secondaryNav.fadeOut(200);
          }
        });
    });
  });
</script>
<?php get_footer();?>
