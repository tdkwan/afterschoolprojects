<?php

function afterschool_script_enqueue() {
    wp_enqueue_style('bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() .'/css/afterschool-home.css', array(), '1.0.0', 'all');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() .'/js/bootstrap.min.js', array(), '4.0.0', true);
    wp_enqueue_script('isotopejs', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '3.0.1', true);
    wp_enqueue_script('imagesLoadedjs', get_template_directory_uri(). '/js/imagesloaded.pkgd.min.js', array(), '4.4.1', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/afterschool.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'afterschool_script_enqueue'); //wp_enqueue_scripts is the 'moment' when Wordpress enqueues all scripts, it is passed the function to run


function afterschool_theme_setup() {
    add_theme_support('menus');

    register_nav_menu('header-menu', 'Header Menu: Home Base');
    register_nav_menu('primary-navigation', 'Primary Navigation Menu: Spheres');
}

add_action('after_setup_theme', 'afterschool_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','gallery'));
