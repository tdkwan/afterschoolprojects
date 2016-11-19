<?php get_header();?>
<?php wp_nav_menu(array('theme_location'=>'welcome-menu'))  ?>
<h1>WELCOME TO AFTER SCHOOL PROJECTS</h1>
  <?php if( have_posts() ):
    //Built in function have_posts (has blog posts, pages, etc.)
            while( have_posts() ): the_post(); ?>
                <div class="row">
                  <div class="col-xs-2">
                  </div>
                  <div class="col-xs-8">
                    <h1 class="article-title"><?php the_title(); ?></h1>
                    <p><?php the_content();?></p>
                  </div>
                </div>
                <small>post date: <?php the_time('F j, Y');//F j, Y specifies format ?> in <?php the_category();?>



            <?php endwhile;

        endif;
  ?>
<?php get_footer();?>
