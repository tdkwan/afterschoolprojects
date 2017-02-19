<?php get_header();?>
<?php wp_nav_menu(array('theme_location'=>'secondary-navigation')); ?>
<?php wp_nav_menu(array('theme_location'=>'header-menu')) ?>
<?php wp_nav_menu(array('theme_location'=>'primary-navigation')); ?>
<div class="category-header-container">
    <img src="http://localhost:8888/wordpress-asp/wp-content/uploads/2017/02/IMG_6588-copy-e1486851995156.jpg">
    <div class="category-header-title-container">
        <h1>Discover</h1>
        <h6>Dont miss what is right in front of you.</h6>
    </div>
</div>
<div class="category-spacer">
</div>
<div class="row category-main-container">
    <div id="grid" class="category-grid">
  <?php if( have_posts() ):
    //Built in function have_posts (has blog posts, pages, etc.)
            while( have_posts() ): the_post(); ?>
                <!--We can create our own template files for all types of content using php
                  using get_template_part('content',get_post_format()); searches for content-'aside''gallery' etc to generate
                  a custom content template type !-->

                    <div class="grid-sizer category-grid-sizer"></div>
                    <div class="grid-item category-grid-item">
                        <a href="<?php echo get_permalink();?>">
                        <div class="category-overlay-container">
                            <h3 class="category-overlay-title">
                                <?php the_title(); ?>
                            </h3>
                        </div>
                            <?php if (class_exists('MultiPostThumbnails')) :
                                    MultiPostThumbnails::the_post_thumbnail(
                                        get_post_type(),
                                        'secondary-image'
                                    );
                                endif; ?>
                        </a>
                    </div>



            <?php endwhile;

        endif;
  ?>
    </div>
</div>
  <script>
    jQuery(function($) {
      var activeSphere = $('#menu-item-54');
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
