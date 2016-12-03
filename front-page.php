<?php get_header();?>
  <?php wp_nav_menu(array('theme_location'=>'primary-navigation')); ?>
    <div class="grid" data-isotope='{ "itemSelector": ".grid-tall", "layoutMode": "fitRows" }'>
      <div class="grid-sizer"></div>
      <div class="grid-featured">
        <a href="http://localhost:8888/wordpress-asp/category/discover/">
          <img class="featured-img" src="http://localhost:8888/wordpress-asp/wp-content/uploads/2016/12/featured.jpg">
        </a>
      </div>
      <div class="grid-tall">
      </div>
      <div class="grid-wide">
      </div>
    </div>
<?php get_footer();?>
