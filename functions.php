<?php

function afterschool_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri() .'/css/afterschool-home.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'afterschool_script_enqueue'); //wp_enqueue_scripts is the 'moment' when Wordpress enqueues all scripts, it is passed the function to run
