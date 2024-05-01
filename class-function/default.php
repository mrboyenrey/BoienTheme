<?php

// My Main Style
function enqueue_my_styles() {
    wp_enqueue_style('my-custom-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all');
}
 
add_action('wp_enqueue_scripts', 'enqueue_my_styles');

// Global Style
function enqueue_global_styles() {
    wp_enqueue_style('my-global-style', get_stylesheet_directory_uri() . '/assets/global.css', array(), '1.0', 'all');
}
 
add_action('wp_enqueue_scripts', 'enqueue_global_styles');

?>