<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AFTER SCHOOL PROJECTS</title>
    <link href="https://fonts.googleapis.com/css?family=Amiri:700|Contrail+One" rel="stylesheet">
    <?php wp_head(); ?> <!-- Wordpress function that says where to print all hooks and actions -->
  </head>

  <?php
    if( is_front_page() ):
      $afterschool_classes = array('afterschoolprojects-classes','home-class');
    else:
      $afterschool_classes = array('afterschoolproject-class');
    endif;
  ?>
  <body <?php body_class($afterschool_classes)?>>
    <?php wp_nav_menu(array('theme_location'=>'primary-navigation')); ?>
