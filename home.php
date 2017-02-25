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

      <div class="grid-item grid-tall">
        <a href="#">
          <img class="grid-item-photo" src="http://localhost:8888/wordpress-asp/wp-content/uploads/2017/02/1D4A1360.jpg">
        </a>
        <div class="post-text-container">
          <div class="sphere-name">
            <a href="http://localhost:8888/wordpress-asp/category/photosvids/">Visuals, Discover</a>
          </div>
          <div class="article-name">
            <a href="http://localhost:8888/wordpress-asp/category/photosvids/">
              <h2 class="article-name-word">An Outsider's Perspective: Israel-Palestine</h2>
            </a>
          </div>
          <div class="grid-article-content">
            <p>We spend so much time in adversity; we are unwilling to confront the validity in the opinions of people who don’t share our world views.</p>
          </div>
          <div class="article-author">
            <a href="#">Lauren Kim</a>
          </div>
        </div>
      </div>

      <div class="grid-item grid-wide">
        <a href="http://localhost:8888/wordpress-asp/photosvids/thailands-youth/">
          <img class="grid-item-photo" src="http://localhost:8888/wordpress-asp/wp-content/uploads/2017/01/IMG_1429_front.jpg">
        </a>
        <div class="post-text-container">
          <div class="sphere-name">
            <a href="http://localhost:8888/wordpress-asp/category/photosvids/">Visuals</a>
          </div>
          <div class="article-name">
            <a href="http://localhost:8888/wordpress-asp/photosvids/thailands-youth/">
              <h2 class="article-name-word">Thailand's Youth</h2>
            </a>
          </div>
          <div class="grid-article-content">
            <p>Look closely enough and see the inherent joy that can be found in every kid across the globe.
            </p>
          </div>
          <div class="article-author">
            <a href="#">Aidan Galassetti, 29 January 2017</a>
          </div>
        </div>
      </div>

      <div class="grid-item grid-wide">
        <a href="http://localhost:8888/wordpress-asp/discover/vance-creek-bridge/">
          <img class="grid-item-photo" src="http://localhost:8888/wordpress-asp/wp-content/uploads/2017/01/IMG_9430_front.jpg">
        </a>
        <div class="post-text-container">
          <div class="sphere-name">
            <a href="http://localhost:8888/wordpress-asp/category/discover/">Discover</a>
          </div>
          <div class="article-name">
            <a href="http://localhost:8888/wordpress-asp/discover/vance-creek-bridge/">
              <h2 class="article-name-word">Vance Creek Bridge</h2>
            </a>
          </div>
          <div class="grid-article-content">
            <p>Vance Creek Bridge is one of those places where you don't believe it actually exists until you feel it beneath your shoes.
            </p>
          </div>
          <div class="article-author">
            <a href="#">Aidan Galassetti, 29 January 2017</a>
          </div>

        </div>
      </div>
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
