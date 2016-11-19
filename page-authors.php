<?php
/*
  Template Name: Authors Page
*/
 get_header();?>
<?php wp_nav_menu(array('theme_location'=>'welcome-menu'))  ?>
  <?php if( have_posts() ):
    //Built in function have_posts (has blog posts, pages, etc.)
            while( have_posts() ): the_post(); ?>

                <h3><?php the_title(); ?></h3>
                <small>post date: <?php the_time('F j, Y');//F j, Y specifies format ?> in <?php the_category();?>

                <p><?php the_content();?></p>

            <?php endwhile;

        endif;
  ?>
<?php get_footer();?>
