<?php

function afterschool_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri() .'/css/afterschool-home.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0', 'all');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() .'/js/bootstrap.min.js', array(), '4.0.0', true);
}

add_action('wp_enqueue_scripts', 'afterschool_script_enqueue'); //wp_enqueue_scripts is the 'moment' when Wordpress enqueues all scripts, it is passed the function to run

function modify_jquery() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.0.min.js', '3.1.0', false);
        wp_enqueue_script('jquery');
    }
}

add_action('init', 'modify_jquery');

function afterschool_theme_setup() {
    add_theme_support('menus');
    register_nav_menu('welcome-menu', 'Home Page: Jumbotron Welcome Menu');
    register_nav_menu('primary-navigation', 'Primary Navigation Menu: Spheres');
}

add_action('after_setup_theme', 'afterschool_theme_setup');
