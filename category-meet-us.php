<?php get_header();?>
<?php wp_nav_menu(array('theme_location'=>'secondary-navigation')); ?>
<?php wp_nav_menu(array('theme_location'=>'header-menu')) ?>
<?php wp_nav_menu(array('theme_location'=>'primary-navigation')); ?>
<div class="mission-statement-container">
  <div class="dark-overlay"></div>
  <img class="mission-statement-background-img" src="http://s624993227.onlinehome.us/wp-content/uploads/2017/01/IMG_0298_min.jpg">
  <div class="mission-statement-description-container">
    <h1>MISSION</h1>
    <p class="mission-statement-description">
      After School Projects (ASP) is a platform where young creators, storytellers, and artists can come together to share, inspire, and collaborate.

  Operated by a team of creative individuals based in Seattle, New York, and Orange County, After School Projects is all about using art and storytelling as a medium of communication and collaboration between young students and creators. We began this project as a way to build a community for and by passionate, creative individuals. Our ultimate goal is to cultivate a spirit for adventure, creativity, and gratitude - a passion for living and curiosity within our communities, wherever or whoever they may be.

  We feature various artists, filmmakers, photographers, designers, writers, musicians, and creators across the country through our online platform. By sharing and discussing our work in an inclusive and collaborative space, we encourage participants to help each other learn, develop, and ultimately thrive as artists and creators.

  We hope you'll  us in our journey by sharing your art, representing your city, and spreading the ASP movement. Let's get to it!
    </p>
  </div>
</div>
<div class="meet-us-team-container">
  <h1>THE TEAM</h1>
</div>
  <div class="container-fluid">
    <div class="row meet-us-author-container">
  <?php if( have_posts() ):
    //Built in function have_posts (has blog posts, pages, etc.)
            while( have_posts() ): the_post(); ?>
<!--We can create our own template files for all types of content using php
                    using get_template_part('content',get_post_format()); searches for content-'aside''gallery' etc to generate
                    a custom content template type !-->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 meet-us-author-content">
                      <div class="meet-us-author-img">
                        <?php the_post_thumbnail();?>
                      </div>
                      <div class="meet-us-author-content">
                        <h6 class="meet-us-author-content-name"> <?php the_title();?></h6>
                        <div class="meet-us-author-content-description"><?php the_content();?></div>
                      </div>
                    </div>
            <?php endwhile;

        endif;
  ?>
    </div> <!-- end row !-->
  </div>
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
