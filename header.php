<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AFTER SCHOOL PROJECTS</title>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/montreal" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Amiri:700|Contrail+One|Playfair+Display:400,700|Roboto|Libre+Baskerville" rel="stylesheet">
    <script src="https://use.typekit.net/yls0kbn.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
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
