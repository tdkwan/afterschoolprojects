<?php get_header();?>
  <?php wp_nav_menu(array('theme_location'=>'header-menu')) ?>
  <div class="home-logo-container">
    <div class="home-logo">
      <img class="main-logo" src="http://localhost:8888/wordpress-asp/wp-content/uploads/2016/12/logo-black.png">
    </div>
  </div>
  <?php wp_nav_menu(array('theme_location'=>'primary-navigation')); ?>
    <!--ISOTOPE GRID INTRO PAGE!-->
    <div class="grid-featured">
      <a href="http://localhost:8888/wordpress-asp/category/discover/">
        <img class="featured-img" src="http://localhost:8888/wordpress-asp/wp-content/uploads/2016/12/featured.jpg">
      </a>
    </div>
    <div id="grid">
      <div class="grid-sizer"></div>

      <div class="grid-item grid-tall">
        <a href="#">
          <img class="grid-tall home" src="http://localhost:8888/wordpress-asp/wp-content/uploads/2016/12/IMG_0217.jpg">
        </a>
        <div class="post-text-container">
          <div class="sphere-name">
            <a href="http://localhost:8888/wordpress-asp/category/photosvids/">Photos/Vids</a>
          </div>
          <div class="article-name">
            <a href="http://localhost:8888/wordpress-asp/category/photosvids/">
              <h3 class="article-name-word">Home defined:</h3>
            </a>
          </div>
          <div class="article-content">
            <p>Home by definition is relative, sometimes it's a state of mind, sometimes it's a place...</p>
          </div>
        </div>
      </div>

      <div class="grid-item grid-wide">
        <a href="http://localhost:8888/wordpress-asp/category/photosvids/">
          <img class="grid-tall home" src="http://localhost:8888/wordpress-asp/wp-content/uploads/2016/12/IMG_1429.jpg">
        </a>
        <div class="post-text-container">
          <div class="sphere-name">
            <a href="http://localhost:8888/wordpress-asp/category/photosvids/">Photos/Vids</a>
          </div>
          <div class="article-name">
            <a href="http://localhost:8888/wordpress-asp/category/photosvids/">
              <h3 class="article-name-word">Thailand's Youth</h3>
            </a>
          </div>
          <div class="article-content">
            <p>Look closely enough and see the inherent joy that can be found in every kid across the globe.
            </p>
          </div>
          <div class="article-author">
            <a href="#">Aidan Galassetti</a>
          </div>
        </div>
      </div>

      <div class="grid-item grid-wide">
        <a href="#">
          <img class="grid-tall home" src="http://localhost:8888/wordpress-asp/wp-content/uploads/2016/12/DSC_0033.jpg">
        </a>
      </div>
    </div>

  <div class="front-page-flex container">
    <div class="flex-item-featured">
      <a href="http://localhost:8888/wordpress-asp/category/photosvids/">
        <img class="featured-flex-image" src="http://localhost:8888/wordpress-asp/wp-content/uploads/2016/12/IMG_1429.jpg">
      </a>
    </div>
    <div class="flex-item-tall">
      <a href="#">
        <img class="flex-item-tall-image" src="http://localhost:8888/wordpress-asp/wp-content/uploads/2016/12/IMG_0217.jpg">
      </a>
    </div>
  </div>
<?php get_footer();?>
